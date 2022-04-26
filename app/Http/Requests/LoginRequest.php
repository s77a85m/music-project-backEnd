<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>['required', 'email:rfc,dns', 'exists:users,email'],
            'password'=>['required', 'min:8'],
            'role'=>['required', 'array'],
            'role.*'=>['exists:roles,id']
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'ايميل را وارد كنيد',
            'email.email'=>'يك ايميل صحيح وارد كنيد',
            'email.exists'=>'نام كاربري يا رمز عبو اشتباه است',
            'password.required'=>'پسورد خود را وارد كنيد',
            'password.min'=>'حداقل تعداد كاراكتر پسورد8',
            'role.array'=>'فرمت صحيح وارد نشده است.',
            'role.required'=>'فرمت صحيح وارد نشده است.',
            'role.exist'=>'اين دسترسي وجود ندارد',
        ];
    }
}
