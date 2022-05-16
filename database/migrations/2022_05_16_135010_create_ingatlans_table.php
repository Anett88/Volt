<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingatlans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategoria_id')->unsigned();
            $table->string("pontszam");
            $table->date("hirdetesDatuma");
            $table->boolean("tehermentes")->default(true);
            $table->integer("ar");
            $table->string("kepUrl");

            $table->foreign('kategoria_id')->references('kategoria_id')->on('kategorias');
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
        Schema::dropIfExists('ingatlans');
    }
};
