<?php

namespace App\Http\Requests;

use Illuminate\Founda
tion\Http\FormRequest;

class PostRequest extends FormRequest
{
   
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|srting|max:4000',
        ];
    }
}
