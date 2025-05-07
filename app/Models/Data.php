<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'card' => 'integer',
        'port' => 'integer',
        'no_port_panel_eakses' => 'integer',
        'no_port_panel_oakses' => 'integer',
        'no_core_feeder' => 'integer',
        'kapasitas_kabel_feeder_utama' => 'integer',
    ];

    protected $hidden = [
        'id'
    ];

    public $timestamps = false;
}
