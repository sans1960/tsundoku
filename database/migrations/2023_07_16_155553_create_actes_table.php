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
        Schema::create('actes', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->string('slug');
            $table->string('image');
            $table->string('hora');
            $table->string('url');
            $table->text('body');
            $table->date('data');
            $table->tinyInteger('active')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actes');
    }
};
