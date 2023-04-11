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
            $table->date('kontrak')->nullable();
            $table->date('kirim')->nullable();
            $table->date('sampai')->nullable();
            $table->date('pasang')->nullable();
            $table->date('uji_coba')->nullable();
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
