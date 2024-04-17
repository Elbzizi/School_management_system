<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('emploi_temps', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId("matier_id")->constrained();
        //     $table->enum('jour', ['Landi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi']);
        //     $table->datetime('date_debute');
        //     $table->datetime('date_fine');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_temps');
    }
};
