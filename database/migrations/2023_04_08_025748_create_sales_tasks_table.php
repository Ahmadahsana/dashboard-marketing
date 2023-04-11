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
        Schema::create('sales_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('wilayah');
            $table->string('mesin');
            $table->integer('qty');
            $table->string('pagu');
            $table->date('kontrak')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('sales_tasks');
    }
};
