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
        Schema::create('niveau_etudes', function (Blueprint $table) {
            $table->id();
            $table->string('Libelle', 50);
			$table->string('Option', 50)->nullable();
            $table->foreignId('Cycle_detude_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveau_etudes');
    }
};
