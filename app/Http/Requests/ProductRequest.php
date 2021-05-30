<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'tanggal_masuk' => 'required',
            'name_goods' => 'required',
            'cost' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'information' => 'required',
            'category_id' => 'required',

        ];
    }

    public function messages()
    {
        return[
            'tanggal.required' => 'wajib diisi',
            'name_goods.required' => 'wajib diisi',
            'cost.required' => 'wajib disii',
            'stock.required' => 'wajib diisi',
            'image.required' => 'wajib diisi',
            'information.required' => 'wajib diisi',
            'category_id' => 'wajib diisi'
        ];
    }
}
