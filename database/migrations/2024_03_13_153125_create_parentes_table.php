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
        Schema::create('parentes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 50);
            $table->string('Prenom', 30);
            $table->date('date_naissance');
            $table->enum('sexe', ["homme", "femme"]);
            $table->foreignId("etudent_id")->constrained();
            $table->string('cin', 8)->unique();
            $table->string('Adress', 150);
            $table->string('Email', 50);
            $table->string('Telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parentes');
    }
};
