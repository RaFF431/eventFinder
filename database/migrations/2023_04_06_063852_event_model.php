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
        Schema::create('event_models', function (Blueprint $table)
        {
            $table->id(); // PK
            $table->string('Kategori_Event');
            $table->string('Deskripsi_Event');
            $table->string('Harga');
            $table->date('Tanggal_Event');
            $table->string('Lokasi_Event');
            $table->string('Nama_Event');
            $table->string('Nama_Organizer');
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
        //
    }
};
