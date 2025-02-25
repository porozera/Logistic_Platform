<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('noOffer')->unique();
            $table->string('lspName');
            $table->string('origin');
            $table->string('destination');
            $table->enum('shipmentMode', ['laut', 'darat']);
            $table->enum('shipmentType', ['FCL', 'LCL']);
            $table->dateTime('loadingDate');
            $table->dateTime('shippingDate');
            $table->dateTime('estimationDate');
            $table->integer('maxWeight');
            $table->integer('maxVolume');
            $table->integer('remainingWeight')->nullable();
            $table->integer('remainingVolume')->nullable();
            $table->string('commodities')->nullable();
            $table->enum('status', ['active', 'deactive']);
            $table->integer('size');
            $table->decimal('price', 10, 2);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
