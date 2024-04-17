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
        Schema::create('matiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("classe_id")->constrained("classes");
            $table->string('nom_matier', 50);
            $table->integer('Coefficient');
            $table->integer('duree');
            $table->primary(['id', 'classe_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiers');
    }
};
