<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
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
            'witel' => 'sometimes|string',
            'sto' => 'sometimes|string',
            'nama_gpon' => 'sometimes|string',
            'card' => 'sometimes|string',
            'port' => 'sometimes|string',
            'nama_lemari_ftm_eakses' => 'sometimes|string',
            'no_panel_eakses' => 'sometimes|string',
            'no_port_panel_eakses' => 'sometimes|string',
            'nama_lemari_ftm_oakses' => 'sometimes|string',
            'no_panel_oakses' => 'sometimes|string',
            'no_port_panel_oakses' => 'sometimes|string',
            'no_core_feeder' => 'sometimes|string',
            'nama_segmen_feeder_utama' => 'sometimes|string',
            'status_feeder' => 'sometimes|string',
            'kapasitas_kabel_feeder_utama' => 'sometimes|string',
            'nama_odc' => 'sometimes|string'
        ];
    }
}
