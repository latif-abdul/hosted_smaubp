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
        Schema::create('artikel_santri', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('gambar')->nullable();
            $table->text('artikel');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('artikel_santri_images', function (Blueprint $table) {
            $table->id();
            $table->integer('id_artikel_santri');
            $table->string('gambar');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_santri');
    }
};
