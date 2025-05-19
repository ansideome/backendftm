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
        Schema::create('uplink_data', function (Blueprint $table) {
            $table->id();
            $table->string('witel')->nullable();
            $table->string('sto')->nullable();
            $table->string('gpon_hostname')->nullable();
            $table->string('gpon_ip')->nullable();
            $table->string('gpon_merk')->nullable();
            $table->string('gpon_tipe')->nullable();
            $table->string('gpon_merk_tipe')->nullable();
            $table->string('gpon_intf')->nullable();
            $table->string('gpon_lacp')->nullable();
            $table->string('neighbor_hostname')->nullable();
            $table->string('neighbor_intf')->nullable();
            $table->string('neighbor_lacp')->nullable();
            $table->string('bw')->nullable();
            $table->string('sfp')->nullable();
            $table->string('vlan_sip')->nullable();
            $table->string('vlan_internet')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('otn_cross_metro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uplink_data');
    }
};
