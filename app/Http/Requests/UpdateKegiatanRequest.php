<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKegiatanRequest extends FormRequest
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
            'nama_kegiatan' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_kegiatan.required' => 'Kolom nama kegiatan harus di isi.',
            'tempat.required' => 'Kolom tempat harus di isi.',
            'tanggal.required' => 'Kolom tanggal harus di isi.',
            'jam.required' => 'Kolom jam harus di isi.',
            'deskripsi.required' => 'Kolom deskripsi harus di isi.',
        ];
    }
}
