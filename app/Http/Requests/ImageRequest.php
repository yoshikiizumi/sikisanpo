<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class ImageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
        
    }

    public function rules() {
        return [
            'imagefile' => 'required',
            'product_name' => 'required|max:30',
            'season' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'imagefile.required' => '写真は必ず指定してください。',
            'product_name.required' => '名前を入力してください。',
            'season.required' => '季節を選択してください。',
        ];
    }
    
}
