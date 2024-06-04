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
        Schema::table('tours', function (Blueprint $table) {
            $table->dropForeign('tours_tour_program_id_foreign');
            $table->dropIndex('tours_tour_program_id_foreign');
            $table->dropColumn('tour_program_id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->bigInteger('tour_program_id')->unsigned()->nullable();
            $table->foreign('tour_program_id')->references('id')->on('tour_programs');
        });

    }
};
