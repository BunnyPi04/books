<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookValueCheck extends FormRequest
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
            'book_sku' => 'required|min:8|max:8',
            'store_id' => 'required',
        ];
    }
}
