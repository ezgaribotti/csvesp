<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setting_id')->constrained('settings');
            $table->string('name');
            $table->string('content')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parameters');
    }
};
