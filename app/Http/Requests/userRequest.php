<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika Anda ingin mengizinkan permintaan ini
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255|unique:users,npm',
            'kelas_id' => 'required|exists:kelas,id',
        ];
    }
}
