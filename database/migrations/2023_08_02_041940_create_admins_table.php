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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->bigInteger('nip');
            $table->varchar('email', 250);
            $table->varchar('username', 250);
            $table->varchar('password', 60); // Panjang 60 untuk kolom password, bisa diganti sesuai kebutuhan
    
            $table->timestamps(); // Tambahkan kolom created_at dan updated_at
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
