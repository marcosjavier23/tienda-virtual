<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_fin', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type_document_fin',['V','E','G','J']);
            $table->integer('nro_document_fin');
            $table->string('name_fin');
            $table->string('last_fin')->nullable();
            $table->string('tlf_local_fin')->nullable();
            $table->string('tlf_movil_fin')->nullable();
    
            $table->string('email')->unique();
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
        Schema::dropIfExists('users_fin');
    }
}
