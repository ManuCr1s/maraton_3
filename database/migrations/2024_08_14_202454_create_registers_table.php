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
        Schema::create('registers', function (Blueprint $table) {
            $table->char('number_doc',50);
            $table->string('name',255);
            $table->string('lastname',255);
            $table->char('genders',1);
            $table->date('born');
            $table->string('addresd',255)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('number_ins',10);
            $table->char('type_doc',1);
            $table->unsignedBigInteger('id_country');
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_province');
            $table->unsignedBigInteger('id_district');
            $table->unsignedBigInteger('id_level');
            $table->foreign('id_country')->references('id_country')->on('countries');
            $table->foreign('id_region')->references('id_region')->on('regions');
            $table->foreign('id_province')->references('id_province')->on('provinces');
            $table->foreign('id_district')->references('id_district')->on('districts');
            $table->foreign('id_level')->references('id_level')->on('levels');    
            $table->dateTime('create_at',$precision = 3);
            $table->dateTime('update_at',$precision = 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
