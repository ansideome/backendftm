<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('witel')->nullable();
            $table->string('sto')->nullable();
            $table->string('nama_gpon')->nullable();
            $table->integer('card')->nullable();
            $table->integer('port')->nullable();
            $table->string('nama_lemari_ftm_eakses')->nullable();
            $table->string('no_panel_eakses')->nullable();
            $table->integer('no_port_panel_eakses')->nullable();
            $table->string('nama_lemari_ftm_oakses')->nullable();
            $table->string('no_panel_oakses')->nullable();
            $table->integer('no_port_panel_oakses')->nullable();
            $table->integer('no_core_feeder')->nullable();
            $table->string('nama_segmen_feeder_utama')->nullable();
            $table->string('status_feeder')->nullable();
            $table->integer('kapasitas_kabel_feeder_utama')->nullable();
            $table->string('nama_odc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
