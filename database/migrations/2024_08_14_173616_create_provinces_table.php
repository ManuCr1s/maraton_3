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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id('id_province');
            $table->string('name_province',50);
            $table->unsignedBigInteger('id_region');
            $table->dateTime('create_at',$precision = 3);
            $table->dateTime('update_at',$precision = 3);
            $table->foreign('id_region')->references('id_region')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
