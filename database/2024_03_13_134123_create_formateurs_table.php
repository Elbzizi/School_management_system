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
        // Schema::create('formateurs', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('Nom', 50);
		// 	$table->string('Prenom', 30);
		// 	$table->date('date_naissance');
		// 	$table->string('Email', 40);
		// 	$table->enum('sexe', ["homme","femme"]);
		// 	$table->string('cin', 8)->unique();
		// 	$table->string('telephone', 10);
		// 	$table->string('Image', 150);
		// 	$table->string('Adress', 150);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
