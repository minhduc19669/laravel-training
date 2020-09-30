<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormSlide extends FormRequest
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
            'slide_image' => 'required|image',
            'slide_desc'  => 'required',
            'slide_status' => 'required'
        ];
    }
    public function messages()
    {
        return [
          'slide_image.required'  => 'không được để trống ô này',
            'slide_image.image'   => 'cần nhập đúng định dạng ảnh',
            'slide_desc.required' => 'Không được để trống ô này',
            'slide_status.required' => 'không được để trống ô này'
        ];
    }
}
