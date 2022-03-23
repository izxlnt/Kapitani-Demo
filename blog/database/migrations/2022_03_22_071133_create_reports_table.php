<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('tanaman');
            $table->date('tarikh');
            $table->string('keluasan');
            $table->string('belanja_id');
            $table->string('item');
            $table->string('item_name');
            $table->string('sop_id');
            $table->string('harga');
            $table->string('kadar_guna');
            $table->string('alat_guna');
            $table->string('pekerja');
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
        Schema::dropIfExists('reports');
    }
}
