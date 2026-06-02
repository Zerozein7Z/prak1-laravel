<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'quantity' => 'sometimes|required|integer|min:0',
            'category_id' => 'sometimes|required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama item wajib diisi saat diubah.',
            'price.required' => 'Harga wajib diisi saat diubah.',
            'quantity.required' => 'Jumlah wajib diisi saat diubah.',
            'category_id.required' => 'Kategori wajib diisi saat diubah.',
            'category_id.exists' => 'Kategori tidak ditemukan.',
        ];
    }
}

