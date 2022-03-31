<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewArtistRequest extends FormRequest
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
            'name'=>['required',],
            'style'=>['required', 'exists:styles,id'],
            'image'=>['required', 'mimes:jpg,png,mpeg']
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'يك نام انتخاب كنيد',
            'style.required'=>'يك سبك انتخاب كنيد',
            'style.exists'=>'اين سبك وجود ندارد',
            'image.required'=>'يك تصوير انتخاب كنيد',
            'image.mimes'=>'پسوند فايل بايد يكي از اين موارد باشد:jpg,png,mpeg'
        ];
    }
}
