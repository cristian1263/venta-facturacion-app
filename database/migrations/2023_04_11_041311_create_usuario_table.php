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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contraseña');
            $table->string('cargo');
            $table->integer('rolid')->unsigned();
            $table->integer('cedula');
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

        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign(['rolid']);
        });
        Schema::dropIfExists('usuario');
    }
};
