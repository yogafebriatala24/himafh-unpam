<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaslonRequest extends FormRequest
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
            'nomor' => 'required|numeric',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'ketua_id' => 'required|numeric',
            'wakil_id' => 'required|numeric',
        ];
    }
}
