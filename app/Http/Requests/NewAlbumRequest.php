<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewAlbumRequest extends FormRequest
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
            'artist'=>['required', 'exists:artists,id']
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'يك عنوان براي آلبوم انتخاب كنيد'  ,
            'artist.required'=>'يك خواننده براي آلبوم انتخاب كنيد'  ,
            'artist.exists'=>'اين خواننده وجود ندارد'  ,
        ];
    }
}
