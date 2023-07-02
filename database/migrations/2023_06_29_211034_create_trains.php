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
        Schema::create('trains', function (Blueprint $table) {
            $table->timestamps();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->integer('codice_treno')->unsigned()->default(0)->length(10);
            $table->integer('numero_carrozze')->unsigned()->default(0)->length(2);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};