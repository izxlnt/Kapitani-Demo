<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelanjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belanjas', function (Blueprint $table) {
            $table->id();
            $table->date('tarikh');
            $table->string('kategori');
            $table->string('item');
            $table->string('nama_bahan');
            $table->string('unit');
            $table->string('jisim');
            $table->string('dos');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('pembekal');
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
        Schema::dropIfExists('belanjas_');
    }
}
