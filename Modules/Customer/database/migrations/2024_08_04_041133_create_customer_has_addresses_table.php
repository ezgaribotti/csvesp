<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_has_addresses', function (Blueprint $table) {
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('address_id')->constrained('addresses');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_has_addresses');
    }
};
