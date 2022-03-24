<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sops', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('ec');
            $table->string('kategori');
            $table->string('item');
            $table->string('dos');
            $table->string('justifikasi');
            $table->string('cara_guna');
            $table->string('operator');
            $table->string('phi');
            $table->string('rei');
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
        Schema::dropIfExists('sops_');
    }
}
