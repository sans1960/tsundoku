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
        Schema::create('denuncia_coment_autors', function (Blueprint $table) {
            $table->id();
            $table->text('motiu');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('coment_autor_id')->constrained('coment_autors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia_coment_autors');
    }
};
