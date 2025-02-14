<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master.fotos', function(Blueprint $table) {
          $table->id();
          $table->string("judul_foto");
          $table->text("deskripsi_foto")->nullable();
          $table->date("tanggal_unggah");
          $table->string("lokasi_file");
          $table->foreignId("album_id")->references("id")->on("master.albums")->onDelete("CASCADE")->onUpdate("CASCADE");
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("master.fotos");
    }
};
