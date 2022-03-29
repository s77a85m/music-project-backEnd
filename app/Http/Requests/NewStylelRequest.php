<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewStylelRequest extends FormRequest
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
            'title'=>['required', 'unique:styles,title']
        ];
    }

    public function messages()
    {
        return [
            'title.unique'=>'.اين سبك قبلا ايجاد شده است',
            'title.required'=>'.يك عنوان انتخاب كنيد',
        ];
    }
}
