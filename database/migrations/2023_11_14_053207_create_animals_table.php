<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id()->unique;
            $table->string("nama", 100);
            $table->string("jenis");
            // $table->string("asal");
            $table->integer("populasi");
            $table->string("habitat");
            // $table->string("deskripsi");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
