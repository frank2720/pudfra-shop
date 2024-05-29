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
        Schema::create('stk_requests', function (Blueprint $table) {
            $table->id();
            $table->string('PhoneNumber');
            $table->double('Amount',10,2);
            $table->string('MerchantRequestID');
            $table->string('CheckoutRequestID');
            $table->enum('Status',['Requested','Paid','Failed']);
            $table->string('ResultDesc')->nullable();
            $table->string('Receipt')->nullable();
            $table->string('TransactionDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stk_requests');
    }
};
