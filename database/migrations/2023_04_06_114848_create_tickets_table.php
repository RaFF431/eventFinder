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
        Schema::create('ticket_models', function (Blueprint $table) {
            $table->id();
            $table->string('Kategori_Event');
            $table->string('Nama_Organizer');
            $table->string('Lokasi_Event');
            $table->string('Nama_Event');
            $table->date('Tanggal_Event');
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
        Schema::dropIfExists('tickets');
    }
};
