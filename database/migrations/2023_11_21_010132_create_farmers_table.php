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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id()->unique;
            $table->string("nama", 100);
            $table->string("pekerjaan");
            $table->string("asal");
            $table->string("kelamin");
            $table->integer("umur");
            $table->string("lama_bekerja");
            $table->date("lahir");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
