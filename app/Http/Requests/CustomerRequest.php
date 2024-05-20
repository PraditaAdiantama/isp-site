<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'alamat' => 'required|string|min:3',
            'tanggal_awal_berlangganan' => 'date|required',
            'packet_id' => 'required|integer|exists:packets,id',
            'keterangan' => 'nullable|string|min:3'
        ];
    }
}
