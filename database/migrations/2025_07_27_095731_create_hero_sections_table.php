<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();             // changed from title_bn
            $table->string('subtitle')->nullable();          // changed from subtitle_bn
            $table->string('highlight')->nullable();         // changed from highlight_bn
            $table->string('register_button_text')->nullable();
            $table->string('register_button_url')->nullable();
            $table->string('announcement_button_text')->nullable();
            $table->string('announcement_button_url')->nullable();
            $table->string('background_image')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
