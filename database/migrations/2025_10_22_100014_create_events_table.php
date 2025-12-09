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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('season')->default('winter');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('perex')->nullable();
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->boolean('show_time')->default(false);
            $table->longText('content');
            $table->json('program')->nullable();
            $table->boolean('published')->default(false);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
