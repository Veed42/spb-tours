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
        Schema::create('tour_programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description_program_tour');
            $table->string('back_image');
            $table->string('days');
            $table->unsignedBigInteger('tour_id')
                ->unsigned();
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_programs');
    }
};
