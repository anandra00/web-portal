<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryaRequest extends FormRequest
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
            'file_karya' => 'nullable|file|mimes:pdf,zip,rar|max:51200',
            'preview_karya' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'tim_pembuat' => 'nullable|array',
            'tim_pembuat.*' => 'string|max:100',
            'status_validasi' => 'nullable|in:menunggu,disetujui,ditolak'
        ];
    }
}