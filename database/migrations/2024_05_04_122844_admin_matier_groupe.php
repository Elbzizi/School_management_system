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
    Schema::create('admin_matier_groupe', function (Blueprint $table) {
      $table->id();
      $table->foreignId('groupe_id')->constrained();
      $table->foreignId('admin_id')->constrained();
      $table->foreignId('matier_id')->constrained();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    //
  }
};
