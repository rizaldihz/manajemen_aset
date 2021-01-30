<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetCreateRequest extends FormRequest
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
            'kode_aset' => ['required','string','regex:/^[a-zA-Z][\w-]+$/i'],
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'jenis_asset' => 'required|uuid',
            'foto' => 'required|file|max:5000',
        ];
    }
    public function messages()
    {
        return [
            'kode_aset.regex' => 'Kode Aset Hanya bisa diisi Alpha numerik!',
            'nama.required'  => 'Nama Aset belum diisi, mohon coba lagi!'
        ];
    }
}
