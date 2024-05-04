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
            Schema::disableForeignKeyConstraints();

            $table->id();

            $table->string('nom_matier', 50);
            $table->integer('Coefficient');
            $table->integer('duree');
            $table->foreignId('admin_id')->constrained()->onDelete('set null');
            $table->foreignId('groupe_id')->constrained()->onDelete('set null');
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
