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
        Schema::create('basts', function (Blueprint $table) {
            $table->id();
            $table->string('no_poi');
            $table->string('barang');
            $table->string('status_bast_id');
            $table->date('proses_kontrak')->nullable();
            $table->date('selesai_kontrak')->nullable();
            $table->date('kirim')->nullable();
            $table->date('sampai')->nullable();
            $table->date('proses_pasang')->nullable();
            $table->date('selesai_pasang')->nullable();
            $table->date('proses_uji_coba')->nullable();
            $table->date('selesai_uji_coba')->nullable();
            $table->date('bast')->nullable();
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
        Schema::dropIfExists('basts');
    }
};
