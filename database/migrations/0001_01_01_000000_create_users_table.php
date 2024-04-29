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
        Schema::create('users', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();

            $table->id();
            $table->string('name', 50);
            $table->string('prenom', 30)->nullable();
            $table->enum('sexe', array ('homme', 'femme'))->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('cin', 8)->unique()->nullable();
            $table->string('adress', 150)->nullable();
            $table->string('photo', 150)->nullable()->default('assets/img/logonull.jpg');
            $table->enum('role',array ('etudiant','parent'))->default('etudiant')->nullable();
            $table->enum('statut', array ('active', 'desactive','bloque'))->default('desactive');
            $table->string('tel')->unique();
            $table->string('email')->unique();
            $table->foreignId("classe_id")->nullable()->constrained();
            $table->foreignId("parent_id")->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId("note_id")->nullable()->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
