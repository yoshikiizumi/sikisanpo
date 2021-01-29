<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
   // public function index(Request $request){
    //    $items = DB::select('select * from products');
      //  return view('image_input',['items' => $items]);
    //}

    public function post(Request $request) {
        $items = DB::select('select * form products');
        return view('image_input', ['items' => $items]);
    }

    public function show(Request $request) {
        $id = $request->id;
        $item = DB::table('products')->where('id', $id)->first();
        return view('image_show', ['item' => $item]);
    }

    public function del(Request $request) {
        $param = ['id' => $request->id];
        $item = DB::select('select * from products where id = :id', $param);
        return view('image_del', ['form' => $item[0]]);
    }

    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::delete('delete from products where id = :id', $param);
        return redirect('/image_input');
    }

    public function getImageInput(){
        $items = DB::select('select * from products');
        return view('image_input', ['items' => $items]);
    }

    public function postImageConfirm(Request $request){
        //写真関係の処理、僕はわからないけどちゃんと動いている
        $post_data = $request->except('imagefile');
        $imagefile = $request->file('imagefile');

        $temp_path = $imagefile->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);

        //仮の変数、データをDBに格納前にいったんここに格納
        $product_name = $post_data['product_name'];
        $season = $post_data['season'];
        $latitude = $post_data['latitude'];
        $longitude = $post_data['longitude'];
        $cityName = $post_data['cityName'];


        /**FIRST CODE */
        //写真を渡して、緯度・経度を返す関数
        function read_gps_location($file){
            if (is_file($file)) {
                $info = exif_read_data($file);
                if (isset($info['GPSLatitude']) && isset($info['GPSLongitude']) &&
                    isset($info['GPSLatitudeRef']) && isset($info['GPSLongitudeRef']) &&
                    in_array($info['GPSLatitudeRef'], array('E','W','N','S')) && in_array($info['GPSLongitudeRef'], array('E','W','N','S'))) {

                    $GPSLatitudeRef  = strtolower(trim($info['GPSLatitudeRef']));
                    $GPSLongitudeRef = strtolower(trim($info['GPSLongitudeRef']));

                    $lat_degrees_a = explode('/',$info['GPSLatitude'][0]);
                    $lat_minutes_a = explode('/',$info['GPSLatitude'][1]);
                    $lat_seconds_a = explode('/',$info['GPSLatitude'][2]);
                    $lng_degrees_a = explode('/',$info['GPSLongitude'][0]);
                    $lng_minutes_a = explode('/',$info['GPSLongitude'][1]);
                    $lng_seconds_a = explode('/',$info['GPSLongitude'][2]);

                    $lat_degrees = $lat_degrees_a[0] / $lat_degrees_a[1];
                    $lat_minutes = $lat_minutes_a[0] / $lat_minutes_a[1];
                    $lat_seconds = $lat_seconds_a[0] / $lat_seconds_a[1];
                    $lng_degrees = $lng_degrees_a[0] / $lng_degrees_a[1];
                    $lng_minutes = $lng_minutes_a[0] / $lng_minutes_a[1];
                    $lng_seconds = $lng_seconds_a[0] / $lng_seconds_a[1];

                    $lat = (float) $lat_degrees+((($lat_minutes*60)+($lat_seconds))/3600);
                    $lng = (float) $lng_degrees+((($lng_minutes*60)+($lng_seconds))/3600);

                    //If the latitude is South, make it negative. 
                    //If the longitude is west, make it negative
                    $GPSLatitudeRef  == 's' ? $lat *= -1 : '';
                    $GPSLongitudeRef == 'w' ? $lng *= -1 : '';

                    
                    return array(
                        'lat' => $lat,
                        'lng' => $lng
                    );
                } else {
                    //緯度・経度データがない場合,0.0のデータを返す
                    return array(
                        'lat' => 0.0,
                        'lng' => 0.0
                    );
                }
            }
        }

        

        /**SECOND CODE */
        //緯度・経度を渡して、町名を返す変数
        //Google reverse geocoding APIを使う
        function getaddress($lat,$lng) {
            $key = "AIzaSyA89oXO9CHChzkj06f_00fFBbheW6xDFEU";//川島くんのAPI key
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='. $lat .','. $lng .'&key='. $key;
            $json = @file_get_contents($url);
            $data=json_decode($json);
            $status = $data->status;
            if($status=="OK")
            {
                for ($j=0;$j<count($data->results[0]->address_components);$j++) {
                    $cn=array($data->results[0]->address_components[$j]->types[0]);
                    if (in_array("locality", $cn)) {
                        return $data->results[0]->address_components[$j]->long_name;
                    }
                }
            }
            else
                //exifデータがないが原因で0.0渡したから町名不明
                return "町名不明";
            {
            return false;
            }
        }
        //緯度・経度をもらって、仮の変数に格納
        $coordinates = read_gps_location($imagefile); 
        $latitude = $coordinates['lat'];
        $longitude = $coordinates['lng'];

        //町名をもらって、仮の変数に格納
        $cityName = getaddress($latitude, $longitude);
        
        //仮の変数を$dataに代入
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path,
            'product_name' => $product_name,
            'season' => $season,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'cityName' => $cityName
        );

        //僕はsessionデータがわらないけど、ちゃんと動いている
        $request->session()->put('data', $data);

        return view('image_confirm', compact('data'));
    }

    public function postImageComplete(Request $request) {
        $data = $request->session()->get('data');
        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];
    
        $filename = str_replace('public/temp/', '', $temp_path);
        $storage_path = 'public/productimage/'.$filename;
    
        $request->session()->forget('data');
    
        Storage::move($temp_path, $storage_path);
    
        $read_path = str_replace('public/', 'storage/', $storage_path);
        $product_name = $data['product_name'];
        $season = $data['season'];
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];
        $cityName = $data['cityName'];
    
        //$this->productcontroller->path = $read_path;
        //$this->productcontroller->product_name = $product_name;
        //$this->productcontroller->save();

        $param = [
            'path' => $read_path,
            'product_name' => $product_name,
            'season' => $season,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'cityName' => $cityName
        ];
        DB::table('products')->insert($param);
        return redirect('image_input');
    }

    /*public function viewImage(Request $request) {
        $items = DB::select('select * from products');
        return view('image_complete', ['items' => $items]);
    }*/
}
