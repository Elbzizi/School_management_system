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
        Schema::create('etudents', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Fr', 50);
            $table->string('Nom_AR', 50);
            $table->string('Prenom_FR', 30);
            $table->string('Prenom_AR', 30);
            $table->foreignId("classe_id")->constrained();
            $table->date('date_naissance');
            $table->string('lieu_Naissance_FR', 40);
            $table->string('lieu_Naissance_AR', 40);
            $table->enum('sexe', array ('homme', 'femme'));
            $table->string('cin', 8)->unique();
            $table->string('Cne', 12)->unique();
            $table->string('Image', 150);
            $table->string('Adress', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudents');
    }
};
