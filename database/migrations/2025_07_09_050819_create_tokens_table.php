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
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');
            $table->string('code', 191)->unique(); // 👈 Fix here
            $table->string('owner_name');
            $table->json('tokens')->nullable(); // Store multiple tokens as JSON
            $table->boolean('is_guest')->default(false);
            $table->enum('status', ['pending', 'accepted', 'cancelled'])->default('pending');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
