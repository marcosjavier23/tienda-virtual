<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type_document_ofi',['V','E','G','J']);
            $table->integer('nro_document_ofi');
            $table->string('name_ofi');
            $table->string('tlf_local_ofi');
            $table->string('tlf_movil_ofi');
            $table->date('fecha_contrato_ini');
            $table->date('fecha_contrato_final');
            $table->string('email')->unique();
            $table->string('password');
 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
