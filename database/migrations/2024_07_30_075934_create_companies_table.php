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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            // TODO:// Founder
            $table->string('founder');
            // TODO:// Co-Leader
            $table->string('co_leader');
            $table->string('name');
            $table->integer('number_of_employees')->default(0);
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
