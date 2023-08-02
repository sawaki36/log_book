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
        Schema::create('peseeta_magang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_univ');
            $table->unsignedBigInteger('id_pembimbing');
            $table->string('nama', 100);
            $table->string('nim', 12);
            $table->string('alamat', 225);
            $table->date('mulai_magang');
            $table->date('akhir_magang');
            $table->string('foto', 225);
            $table->string('email', 225);
            $table->string('no_tlp', 225);
            $table->string('username', 225);
            $table->string('password', 225);
    
            $table->foreign('id_univ')->references('id')->on('univ');
            $table->foreign('id_pembimbing')->references('id')->on('pembimbing');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peseeta_magang');
    }
};
