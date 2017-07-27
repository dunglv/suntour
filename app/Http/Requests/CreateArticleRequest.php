<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10|max:200',
            'description' => 'min:10|max:255',
            'content' => 'required|min:10',
            'thumbnail' => 'mimes:jpeg,jpg,png,gif,bmp|between:1,2048',
        ];
    }
}
