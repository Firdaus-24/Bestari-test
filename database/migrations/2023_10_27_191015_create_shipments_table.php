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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->foreignId('order_id')->nullable(false);
            $table->char('code', 20)->nullable(false);
            $table->enum('status', ['waiting', 'sent', 'cancel'])->nullable(false);
            $table->date('created_at')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
