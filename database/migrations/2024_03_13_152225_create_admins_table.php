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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('Prenom', 30)->nullable();
            $table->date('date_naissance')->nullable();
            $table->enum('sexe', array (''))->nullable();
            $table->string('cin', 8)->unique();
            $table->string('Image', 150)->nullable();
            $table->string('Adress', 150)->nullable();
            $table->enum('roles', array ('Surville', 'directeur'))->default('Surville');
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
