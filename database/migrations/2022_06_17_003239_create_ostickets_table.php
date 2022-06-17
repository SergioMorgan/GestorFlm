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
        Schema::create('ostickets', function (Blueprint $table) {
            $table->id();
            $table->string('siomid', 10)->unique();
            $table->string('localid', 10);
            $table->string('estado', 20);
            $table->string('tipo', 30);
            $table->dateTime('fechaasignacion');
            $table->dateTime('fechallegada')->nullable();
            $table->dateTime('fechacierre')->nullable();
            $table->string('codigoremedy', 20)->nullable();
            $table->text('descripcion');
            $table->text('ciere')->nullable();
            $table->dateTime('iniciopr1')->nullable();
            $table->dateTime('finpr1')->nullable();
            $table->string('motivopr1')->nullable();
            $table->string('sustentopr1')->nullable();
            $table->dateTime('iniciopr2')->nullable();
            $table->dateTime('finpr2')->nullable();
            $table->string('motivopr2')->nullable();
            $table->string('sustentopr2')->nullable();
            $table->dateTime('iniciopr3')->nullable();
            $table->dateTime('finpr3')->nullable();
            $table->string('motivopr3')->nullable();
            $table->string('sustentopr3')->nullable();
            $table->dateTime('iniciopr4')->nullable();
            $table->dateTime('finpr4')->nullable();
            $table->string('motivopr4')->nullable();
            $table->string('sustentopr4')->nullable();
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
        Schema::dropIfExists('ostickets');
    }
};
