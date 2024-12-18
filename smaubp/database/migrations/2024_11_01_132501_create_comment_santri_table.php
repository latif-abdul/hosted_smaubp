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
        Schema::create('comment_santri', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_artikel');
            $table->bigInteger('id_comment')->nullable();
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_santri');
    }
};
