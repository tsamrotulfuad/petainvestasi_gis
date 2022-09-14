<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('nama_usaha');
            $table->string('slug')->unique();
            $table->string('nib');
            $table->text('alamat_usaha');
            $table->string('produk');
            $table->string('kapasitas_produksi');
            $table->smallInteger('jumlah_karyawan');
            $table->integer('harga');
            $table->string('gambar_produk');
            $table->string('kontak');
            $table->string('website');
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
        Schema::dropIfExists('batiks');
    }
}
