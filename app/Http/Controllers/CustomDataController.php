<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomDataController extends Controller
{
    public function getDataByStoName(Request $request)
    {
        $sto = $request->input('sto');

        $data = Data::select(
            'sto',
            'nama_gpon',
            'nama_lemari_ftm_eakses',
            'nama_lemari_ftm_oakses',
            'status_feeder',
            'kapasitas_kabel_feeder_utama',
            DB::raw('COUNT(*) as total_sto'),
            DB::raw('SUM(kapasitas_kabel_feeder_utama) as total_kapasitas')
        )->when(
            $sto,
            function ($query, $sto) {
                return $query->where('sto', 'like', '%' . $sto . '%');
            }
        )->groupBy(
            'sto',
            'nama_gpon',
            'nama_lemari_ftm_eakses',
            'nama_lemari_ftm_oakses',
            'status_feeder',
            'kapasitas_kabel_feeder_utama',
        )->get();
    }
}
