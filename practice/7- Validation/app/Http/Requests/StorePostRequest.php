<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => "required|max:50",
            "body" => "required|unique:posts|max:255",
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'يرجي ادخال عنوان البوست',
            'title.max' => 'عدد الاحرف المسموح بها 50',
            'body.required' => 'A message is required',
        ];
    }
}
