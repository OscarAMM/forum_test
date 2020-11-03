<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('forum_name');
            $table->text('forum_description')->nullable(); //nullable es para definir que el campo puede ser nulo en BD
            $table->string('user_name');
            //$table->foreignId('user_id')->constrained('users'); //el usuario que creó el foro
            // $table->foreignId('comment_id')->constrained('comments'); 
            //commentid ¿por qué lo llaman en forums? 
            //Foro foro prueba  - comentarios  tiene 
            // tabla muchos a muchos
            // foro id 1 - comment id 1 
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
        Schema::dropIfExists('forums');
    }
}
