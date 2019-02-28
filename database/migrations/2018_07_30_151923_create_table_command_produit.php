<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCommandProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_produit', function (Blueprint $table) {
            $table->integer('command_id')->unsigned();
            $table->foreign('command_id')->references('id')->on('command');
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produit');
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
        Schema::dropIfExists('command_produit');
    }
}
