<?php
namespace App\Http\Controllers;
 
//use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
//use App\Models\Contact;
 
class ContactsController extends Controller
{
    public function index()
    {
//        $genders = Contact::$genders;
 
//        return view('contacts.index', compact('genders'));
          return view('contacts.index');
    }

    public function confirm(Request $request) {
        //$contact = new Contact($request->all());    
        //return view('contacts.confirm', compact('contact'));
        $request->validate([
            'email' => 'required|email',
            'title'  => 'required',
            'body'  => 'required',
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('contacts.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function complete(Request $request) {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required'
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect('/contacts')
                //->route('contacts.index')
                ->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            \Mail::to($inputs['email'])->send(new ContactMail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('contacts.complete');
            
        }
/*        $input = $request->except('action');
        
        if ($request->action === '戻る') {
            return redirect()->action('ContactsController@index')->withInput($input);
        }
    
        // チェックボックス（配列）を「,」区切りの文字列に
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }
    
        // データを保存
        Contact::create($request->all());
    
        // 二重送信防止
        $request->session()->regenerateToken();

        // 送信メール
        \Mail::send(new \App\Mail\Contact([
            'to' => $request->email,
            'to_name' => $request->name,
            'from' => 'from@example.com',
            'from_name' => 'MySite',
            'subject' => 'お問い合わせありがとうございました。',
            'type' => $request->type,
            'gender' => $request->gender,
            'body' => $request->body
        ]));
     
        // 受信メール
        \Mail::send(new \App\Mail\Contact([
            'to' => 'from@example.com',
            'to_name' => 'MySite',
            'from' => $request->email,
            'from_name' => $request->name,
            'subject' => 'サイトからのお問い合わせ',
            'type' => $request->type,
            'gender' => $request->gender,
            'body' => $request->body
        ], 'from'));
            
        return view('contacts.complete'); */
    }
}