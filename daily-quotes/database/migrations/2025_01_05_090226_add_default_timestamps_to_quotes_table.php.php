<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('quotes', function ($table) {
      $table
        ->timestamp('created_at')
        ->default(DB::raw('CURRENT_TIMESTAMP'))
        ->change();
      $table
        ->timestamp('updated_at')
        ->default(DB::raw('CURRENT_TIMESTAMP'))
        ->change();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('quotes', function ($table) {
      $table
        ->timestamp('created_at')
        ->nullable()
        ->change();
      $table
        ->timestamp('updated_at')
        ->nullable()
        ->change();
    });
  }
};
