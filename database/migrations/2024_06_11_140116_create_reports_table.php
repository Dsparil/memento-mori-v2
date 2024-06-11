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
        Schema::create('reports', function (Blueprint $table) {
            $table->unsignedInteger('id', true)->primary();
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('artist_id');
            $table->unsignedInteger('place_id');
            $table->string('title', 1024);
            $table->text('content');
            $table->string('summary', 1024);
            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('authors')
                ->cascadeOnDelete();

            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
                ->cascadeOnDelete();

            $table->foreign('place_id')
                ->references('id')
                ->on('places')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
