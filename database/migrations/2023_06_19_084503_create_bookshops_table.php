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
        Schema::create('bookshops', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug');
            $table->string('logo');
            $table->text('qui_som');
            $table->string('url');
            $table->string('ciutat');
            $table->string('latitud');
            $table->string('longitud');
            $table->integer('zoom')->default(14);
            $table->tinyInteger('active')->default(0);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookshops');
    }
};
