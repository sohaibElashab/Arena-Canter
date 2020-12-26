<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('name');
            $table->text('description_short');
            $table->text('description');
            $table->decimal('price',4,2);
            $table->integer('energy_value');
            $table->integer('proteins');
            $table->integer('carbohidrats');
            $table->string('ingredients');
            $table->string('ticket');
            $table->string('picture');
            $table->string('taille');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
