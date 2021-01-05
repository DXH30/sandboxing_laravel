<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bst', function (Blueprint $table) {
            $table->id();
            $table->string('KDPROPKDKAB')->nullable();
            $table->string('KDPROP')->nullable();
            $table->string('KDKAB')->nullable();
            $table->string('KDKEC')->nullable();
            $table->string('KDDESA')->nullable();
            $table->string('NAMA_PROVINSI')->nullable();
            $table->string('NAMA_KABKOTA')->nullable();
            $table->string('NAMA_KECAMATAN')->nullable();
            $table->string('NAMA_DESA')->nullable();
            $table->string('ALAMAT_LENGKAP')->nullable();
            $table->string('ALAMAT_CAPIL')->nullable();
            $table->string('ID_DTKS')->nullable();
            $table->string('ID_KELUARGA')->nullable();
            $table->string('ID_ART')->nullable();
            $table->string('NIK')->nullable();
            $table->string('NAMA')->nullable();
            $table->string('HASIL')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('status_usulan')->nullable();
            $table->string('status_data')->nullable();
            $table->string('WIL')->nullable();
            $table->string('MITRA')->nullable();
            $table->string('NOREKENING')->nullable();
            $table->string('FLAG')->nullable();
            $table->string('FLAG_PENYALURAN')->nullable();
            $table->string('FLAG_PKH_PERLUASAN')->nullable();
            $table->string('NOPESERTA_PKH_SEP')->nullable();
            $table->string('NOREKENING_PKH_SEP')->nullable();
            $table->string('FLAG_MB9')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bst');
    }
}
