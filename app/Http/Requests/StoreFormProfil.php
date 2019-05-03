<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormProfil extends FormRequest
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
            //
            'namalengkap' => 'required|string|max:100',
            'nohp_wa' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
           'namalengkap.required' => 'Mohon isikan nama lengkap anda', 
           'nohp_wa.required' => 'Mohon isikan No HP anda',
        ];
    }
}
