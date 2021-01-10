<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class PeminjamanPostRequest extends FormRequest
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
            'id_aset' => 'required|uuid',
            'lokasi' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'id_aset.required' => 'Aset belum dipilih, mohon coba lagi!',
            'lokasi.required'  => 'Lokasi belum diisi, mohon coba lagi!'
        ];
    }
}
