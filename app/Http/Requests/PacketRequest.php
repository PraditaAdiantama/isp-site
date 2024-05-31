<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacketRequest extends FormRequest
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
            'nama' => 'required|string|min:3',
            'harga' => 'required|integer|min:1000'
        ];
    }

    public function messages():array
    {
        return [
            'nama.required' => 'Nama paket harus di isi',
            'harga.required' => 'Harga paket harus di isi',
            'nama.min' => 'Nama paket tidak boleh kurang dari 3 karakter',
            'harga.min' => 'Harga paket tidak tidak boleh kurang dari Rp. 1000'
        ];
    }
}
