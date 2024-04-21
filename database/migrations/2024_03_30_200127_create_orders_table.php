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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Имя того кто оформляет');
            $table->string('phone')->comment('Телефон того кто оформляет');
            $table->string('email')->comment('Мэил того кто оформляет');
            $table->string('country')->comment('Город того кто оформляет');
            $table->time('time_tour');
            $table->string('count_grown');
            $table->string('count_children');
            $table->string('age_children');




            $table->unsignedTinyInteger('status')
                ->default(0)
                ->nullable(false);
            $table->bigInteger('tour_id')->unsigned();

            $table->unsignedBigInteger('title_tours')->unsigned()->comment('Название тура в заказе');
            $table->unsignedBigInteger('price_tours')->unsigned()->comment('Цена тура в заказе');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
