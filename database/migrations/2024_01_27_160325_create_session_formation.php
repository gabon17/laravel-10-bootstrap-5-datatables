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
        Schema::create('session_formation', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description')->nullable();
            $table->integer('nb_participants');
            $table->integer('nb_jours');
            $table->boolean('presentiel');
            $table->boolean('type')->nullable(); //interne/externe-+-
            $table->unsignedBigInteger('sujetformation_id');
            $table->unsignedBigInteger('etabformation_id')->index();// Foreign key column
            // Other profile columns...
            $table->foreign('sujetformation_id')->references('id')->on('sujet_formations'); // Define foreign key
            $table->foreign('etabformation_id')->references('id')->on('etab_formation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_formation');
    }
};
