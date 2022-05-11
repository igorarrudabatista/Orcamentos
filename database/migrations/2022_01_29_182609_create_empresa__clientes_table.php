<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa__clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_Empresa');
            $table->string('Cnpj')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Site')->nullable();
            $table->string('Endereco')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Estado')->nullable();
            $table->string('image')->nullable();


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
        Schema::dropIfExists('empresa__clientes');
    }
}
