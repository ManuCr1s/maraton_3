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
        Schema::create('districts', function (Blueprint $table) {
            $table->id('id_district');
            $table->string('name_district',50);
            $table->unsignedBigInteger('id_province');
            $table->dateTime('create_at',$precision = 3);
            $table->dateTime('update_at',$precision = 3);
            $table->foreign('id_province')->references('id_province')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
