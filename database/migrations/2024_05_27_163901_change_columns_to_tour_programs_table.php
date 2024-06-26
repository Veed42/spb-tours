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
        Schema::table('tour_programs', function (Blueprint $table) {
            $table->renameColumn('description_program_tour', 'description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour_programs', function (Blueprint $table) {
            $table->renameColumn('description', 'description_program_tour');
        });
    }
};
