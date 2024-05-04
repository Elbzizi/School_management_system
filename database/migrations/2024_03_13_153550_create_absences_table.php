<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
			      $table->String('matier');
			      $table->date('date_Absences');
			      $table->boolean('justife')->default(false);
			      $table->text('description');
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
        });
    }
=======
return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('absences', function (Blueprint $table) {
      $table->id();
      $table->String('matier');
      $table->boolean('justife')->default(false);
      $table->text('description');
      $table->date('date_Absences');
      $table->foreignId("user_id")->constrained();
      $table->timestamps();
    });
  }
>>>>>>> 441505b89cfc1040d260aa00b5970ac3644e3129

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('absences');
  }
};
