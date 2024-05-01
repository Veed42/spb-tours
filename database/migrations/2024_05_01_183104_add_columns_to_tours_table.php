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
            $table->bigInteger('guides_id')->unsigned();
            $table->foreign('guides_id')->references('id')->on('guides');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropForeign('tours_guides_id_foreign');
            $table->dropIndex('tours_guides_id_foreign');
            $table->dropColumn('guides_id');
//вот так выполняется удаление FK
        });
    }
};
