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
        Schema::create('admins', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();

            $table->id();
            $table->string('name');
            $table->string('prenom', 30)->nullable();
            $table->enum('sexe', array ('homme','femme'))->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('cin', 8)->unique();
            $table->string('adress', 150)->nullable();
            $table->string('photo', 150)->nullable()->default('assets/img/logonull.jpg');
            $table->enum('role', array ('surveillant', 'directeur','enseignant'))->default('surveillant');
            $table->enum('statut', array ('actif', 'inactif','bloque'))->default('actif');
            $table->string('tel')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
