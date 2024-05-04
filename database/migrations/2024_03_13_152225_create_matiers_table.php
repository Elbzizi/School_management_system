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
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('set null');
            // $table->foreignId("classe_id")->constrained("classes");
            // $table->primary(['id', 'classe_id']);
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
