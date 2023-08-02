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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembimbing_id');
            $table->string('variabel_penilayan', 225);
            $table->integer('nilai_angka');
            $table->string('nilai_huruf', 10); // Misalnya, panjang nilai huruf adalah 10 karakter
            $table->timestamps();
    
            // Tambahkan foreign key constraint ke kolom pembimbing_id
            $table->foreign('pembimbing_id')->references('id')->on('pembimbings');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
