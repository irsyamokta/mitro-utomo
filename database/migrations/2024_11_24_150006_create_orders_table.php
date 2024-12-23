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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('order_id');
            $table->json('product_details');
            $table->string('payment_status')->default('Belum dibayar');
            $table->decimal('total_price', 15, 2);
            $table->string('shipping');
            $table->string('notes', 255)->default('Resi belum dibuat');
            $table->string('resi')->nullable();
            $table->integer('quantity');
            $table->string('status', 50)->default('Pending');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
