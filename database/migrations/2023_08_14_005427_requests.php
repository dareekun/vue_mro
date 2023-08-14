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
        Schema::create('partrequest', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('cost_center');
            $table->string('type');
            $table->string('remark');
            $table->string('user');
            $table->json('data');
            $table->integer('level')->default(0);
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
