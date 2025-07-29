<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('bkash_num')->nullable()->nullable();
            $table->string('bkash_trans_id')->nullable()->nullable();
            $table->enum('payment_method', ['bkash Agent', 'bkash personal'])->nullable();
            $table->enum('status', ['pending', 'Approved', 'Cancel']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}