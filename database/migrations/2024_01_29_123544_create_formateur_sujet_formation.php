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
        Schema::create('Formateur_formations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sujetformation_id')->index();
            $table->unsignedBigInteger('formateur_id');
            $table->foreign('sujetformation_id')->references('id')->on('sujet_formations')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            $table->timestamps();


        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateur_sujet_formation');
    }
};
