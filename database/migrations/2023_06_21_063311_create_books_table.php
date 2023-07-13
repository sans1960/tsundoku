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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->string('slug');
            $table->string('autor_nom');
            $table->foreignId('genere_id')->constrained('generes');
            $table->unsignedBigInteger('autor_id')->nullable();
            $table->unsignedBigInteger('editorial_id')->nullable();
            $table->string('editorial_nom');
            $table->string('isbn');
            $table->string('imatge');
            $table->text('sinopsi');
            $table->string('editorial_web');
            $table->string('idioma');
            
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
