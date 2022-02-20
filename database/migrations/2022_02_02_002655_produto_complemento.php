<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoComplemento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
 
            $table->bigInteger('complemento_id')->unsigned()->index();
            $table->foreign('complemento_id')->references('id')->on('complemento');

            $table->bigInteger('produto_id')->unsigned()->index();
            $table->foreign('produto_id')->references('id')->on('produto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
