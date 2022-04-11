<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMusicRequest extends FormRequest
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
            'title'=>['required',],
            'style'=>['required', 'exists:styles,id'],
            'artist'=>['required', 'exists:artists,id'],
            'album'=>['exists:albums,id'],
            'image'=>['required', 'mimes:jpg,jpeg,mpeg,png'],
            'date'=>['required',],
            'description'=>['required']
        ];
    }
}
