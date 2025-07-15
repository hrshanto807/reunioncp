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
            $table->string('name');
            $table->year('batch');
            $table->string('father_name');
            $table->string('blood');
            $table->string('photo')->nullable(); // store uploaded photo path
            $table->string('tshirt');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('representative_name')->nullable();
            $table->enum('registration_type', ['single', 'group']);
            $table->integer('participant_count')->default(1);
            $table->boolean('terms_agreed')->default(false);
            $table->decimal('amount', 10, 2);
             $table->string('bkash_num');
             $table->string('bkash_trans_id');
            $table->enum('payment_method', ['bkash Agent','bkash personal']);
            $table->enum('status', ['painding', 'Approved', 'Cancel']);
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
