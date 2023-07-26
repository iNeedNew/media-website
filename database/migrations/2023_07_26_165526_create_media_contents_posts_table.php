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
        Schema::create('media_contents_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id');
            $table->foreignId('media_content_id');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('media_content_id')->references('id')->on('media_contents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_contents_posts');
    }
};
