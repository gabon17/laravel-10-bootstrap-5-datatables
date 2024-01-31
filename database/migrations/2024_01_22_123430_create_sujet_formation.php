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
        //
        Schema::create('sujet_formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->integer('id_domaine')->nullable()->unsigned();
            $table->foreign('id_domaine')->references('id')->on('domaines');
            /*$table->integer('id_domaine')->nullable()->unsigned();
            $table->foreign('id_domaine')->references('id_domaine')->on('domaines');*/

            $table->timestamps();
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
