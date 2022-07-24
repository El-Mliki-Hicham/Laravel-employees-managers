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
        Schema::create('Departements', function (Blueprint $table) {
            $table->increments("id_Departement");
            $table->string('Nom_epartement')->nullable();
            // $table->timestamps();

        });
        Schema::create('employees', function (Blueprint $table) {
            $table->increments("id_employee");
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->date('Date_de_naissance')->nullable();
            $table->unsignedInteger('Departement')->nullable();
            $table->decimal('salaire')->nullable();
            $table->string('photo')->nullable();
            $table->foreign('Departement')
            ->references('id_Departement')
            ->on('Departements')
            ->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
