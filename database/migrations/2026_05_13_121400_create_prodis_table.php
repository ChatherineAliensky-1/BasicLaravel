<?php

use App\Models\Fakultas;
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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Fakultas::class)->constrained('fakultas'); 
            $table->string('nama_prodi');
            $table->string('nama_kaprodi');
            $table->string('photo_kaprodi')->nullable();
            $table->timestamps();
            $table->softDeletes(); //data tetap ada, tpi tidak tampil di user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
