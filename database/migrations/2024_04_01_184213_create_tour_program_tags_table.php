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
        Schema::create('tour_program_tags', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('tour_programs_id')->unsigned();
            $table->foreign('tour_programs_id')
                ->references('id')
                ->on('tour_programs');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_program_tags');
    }
};
