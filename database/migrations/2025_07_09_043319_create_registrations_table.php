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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->year('batch')->nullable();
            $table->string('father_name')->nullable();
            $table->string('blood')->nullable();
            $table->string('photo')->nullable();
            $table->string('tshirt')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('representative_name')->nullable();
            $table->enum('registration_type', ['single', 'group']);
            $table->integer('participant_count')->default(1);
            $table->boolean('terms_agreed')->default(false);
            $table->decimal('amount', 10, 2)->default(0);
            $table->string('bkash_num')->nullable();
            $table->string('bkash_trans_id')->nullable();
            $table->enum('payment_method', ['bkash Agent', 'bkash personal']);
            $table->enum('status', ['pending', 'approved', 'cancel']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
