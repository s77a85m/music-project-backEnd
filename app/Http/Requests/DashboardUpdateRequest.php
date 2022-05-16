<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DashboardUpdateRequest extends FormRequest
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
            'name'=>['required'],
            'email'=>['email', 'required'],
            'file'=>['nullable', 'max:2048'],
            'password'=>['nullable', 'min:8']

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'فيلد نام نبايد خالي باشد',
            'email.required'=>'فيلد ايميل نبايد خالي باشد',
            'email.email'=>'ايميل صحيح وارد كنيد',
            'file.max'=>'حجم فايل نبايد بيشتر از 2 مگابايت باشد',
            'password.min'=>'پسورد حداقل 8 كاراكتر باشد'
        ];
    }
}
