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
            $table->bigInteger('guid_id')->unsigned();
            $table->foreign('guid_id')->references('id')->on('guides');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropForeign('tours_guid_id_foreign');
            $table->dropIndex('tours_guid_id_foreign');
            $table->dropColumn('guid_id');
        });
    }
};
