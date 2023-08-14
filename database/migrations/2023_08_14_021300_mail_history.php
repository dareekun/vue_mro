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
        Schema::create('mail', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('recipent');
            $table->string('copy_carbon')->nullable();
            $table->string('subject');
            $table->string('attachment')->nullable();
            $table->json('data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
