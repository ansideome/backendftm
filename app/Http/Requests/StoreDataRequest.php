<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreDataRequest extends FormRequest
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
            'witel' => 'nullable|string',
            'sto' => 'nullable|string',
            'nama_gpon' => 'nullable|string',
            'card' => 'nullable|string',
            'port' => 'nullable|string',
            'nama_lemari_ftm_eakses' => 'nullable|string',
            'no_panel_eakses' => 'nullable|string',
            'no_port_panel_eakses' => 'nullable|string',
            'nama_lemari_ftm_oakses' => 'nullable|string',
            'no_panel_oakses' => 'nullable|string',
            'no_port_panel_oakses' => 'nullable|string',
            'no_core_feeder' => 'nullable|string',
            'nama_segmen_feeder_utama' => 'nullable|string',
            'status_feeder' => 'nullable|string',
            'kapasitas_kabel_feeder_utama' => 'nullable|string',
            'nama_odc' => 'nullable|string'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ], 422));
    }
}
