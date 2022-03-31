<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtistRequest extends FormRequest
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
            'style'=>['required', 'exists:styles,id']
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'يك نام انتخاب كنيد',
            'style.required'=>'يك استايل انتخاب كنيد',
            'style.exists'=>'اين استايل وجود ندارد',
        ];
    }
}
