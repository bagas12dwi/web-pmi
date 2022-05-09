<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mis');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('gol_darah');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('kelas');
            $table->string('tingkat');
            $table->string('asal_sekolah');
            $table->string('no_darurat');
            $table->string('surat_dokter');
            $table->string('surat_ijin_ortu');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
