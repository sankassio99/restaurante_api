<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumRestaurante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurante', function (Blueprint $table) {
            $table->string('telefone') // Nome da coluna
                        ->nullable() // Preenchimento não obrigatório
                        ->after('imagem'); // Ordenado após a coluna "password"
            $table->string('email') // Nome da coluna
                        ->nullable() // Preenchimento não obrigatório
                        ->after('telefone'); // Ordenado após a coluna "password"
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
