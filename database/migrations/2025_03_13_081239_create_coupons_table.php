<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code', 191)->unique();
            $table->enum('type', ['fixed', 'percentage']);
            $table->decimal('amount');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('amount_left')->default(0);
            $table->enum('customer_type', ['guest', 'walkin']);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
