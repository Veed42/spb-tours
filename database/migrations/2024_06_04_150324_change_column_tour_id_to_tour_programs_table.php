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
            $table->dropForeign('tour_programs_tour_id_foreign');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour_programs', function (Blueprint $table) {
            $table->dropForeign('tour_programs_tour_id_foreign');
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }
};
