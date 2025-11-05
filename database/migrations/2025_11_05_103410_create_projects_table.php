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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->text('description');
            $table->longText('long_description');
            $table->string('client')->nullable();
            $table->string('duration')->nullable();
            $table->string('year');
            $table->json('technologies');
            $table->json('results')->nullable();
            $table->string('image_url')->nullable();
            $table->string('status')->default('draft'); // draft, published
            $table->boolean('featured')->default(false);
            $table->string('color')->default('sky'); // for UI color scheme
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
