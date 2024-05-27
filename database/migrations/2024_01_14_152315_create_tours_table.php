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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price');
            $table->string('preview_image');
            $table->string('main_image');
            $table->string('duration_tour')->comment('Продолжительность тура');
            $table->time('begin_tour')
                ->comment('Время начала тура');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');


        });
    }
    //do сделать связь с моделями категорий и с моделью программа тура , у каждого тура идёт своя программа, у каждого тура своя категория(групповые инд.)
//do сделать добавление туров и категории, также верстка туров в админке

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
