<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonasiDonaturTetapRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nominal_donasi' => 'required',
            'bukti_transfer' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nominal_donasi.required' => 'Kolom nominal harus di isi.',
            'bukti_transfer.required' => 'Kolom bukti transfer harus di isi.',
        ];
    }
}
