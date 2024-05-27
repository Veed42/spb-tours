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
        Schema::table('tour_reviews', function (Blueprint $table) {
            $table->bigInteger('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour_reviews', function (Blueprint $table) {
            $table->dropForeign('tour_reviews_tour_id_foreign');
            $table->dropIndex('tour_reviews_tour_id_foreign');
            $table->dropColumn('tour_id');
        });
    }
};
