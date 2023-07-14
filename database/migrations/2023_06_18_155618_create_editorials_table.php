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
        Schema::create('editorials', function (Blueprint $table) {
            $table->id();
            $table->string('editorial_nom');
            $table->string('slug');
            $table->text('descripcio');
            $table->string('url');
            $table->string('url_vendes');
            $table->string('logo');
            $table->string('adreça')->nullable();
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
        Schema::dropIfExists('editorials');
    }
};
