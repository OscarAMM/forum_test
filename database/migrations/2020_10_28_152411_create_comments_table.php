<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('content'); //text no tiene límite - string 192 caracteres
            $table->foreignId('user_id')->constrained('users');//nombres de usario   clave foránea
            $table->timestamps(); //fecha y hora

            //Comments
            //$table->foreignId('comment_id')->constrained('comments'); //comentarios  ¿por qué hacer referencia a la misma tabla?
            // foreingId hace referencia a un campo de otra tabla (id) -> constrained es establecer la tabla se llama (Tabla foránea)
            //se puede establecer una fecha alterna
            //$table->foreignId('forum_id')->constrained('forums');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
