<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:30',
            'tahun' => 'required|integer|digits:4|min:2000|max:' . (date('Y') + 1),
            'file_karya' => 'nullable|file|mimes:pdf,zip,rar|max:51200', // 50MB
            'preview_karya' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
            'tim_pembuat' => 'nullable|array',
            'tim_pembuat.*' => 'string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul karya wajib diisi',
            'deskripsi.required' => 'Deskripsi karya wajib diisi',
            'kategori.required' => 'Kategori karya wajib dipilih',
            'tahun.required' => 'Tahun pembuatan wajib diisi',
            'file_karya.mimes' => 'File karya harus berformat PDF, ZIP, atau RAR',
            'file_karya.max' => 'Ukuran file karya maksimal 50MB',
            'preview_karya.image' => 'Preview harus berupa gambar',
            'preview_karya.max' => 'Ukuran preview maksimal 5MB'
        ];
    }
}
