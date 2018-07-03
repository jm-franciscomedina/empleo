<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_company')->unique();//nombre de la empres
            $table->string('business_name');//razon social
            $table->string('rif')->nulltable();//rif
            $table->string('direction')->nulltable();//direccion fiscal
            $table->string('type_of_company')->nulltable();//typo de empresa
            $table->string('site')->nulltable();//sitio web
            $table->string('kind_of_property')->nulltable();//tipo de propiedad
            $table->string('workers_nuns')->nulltable();//numeros de empleados
            $table->string('country')->nulltable();//pais 
            $table->string('region')->nulltable();//provincia o estado
            $table->string('city')->nulltable();//cuidd
            $table->string('postal_code')->nulltable();//codigo postal
            
            $table->text('description')->nulltable();
            
            $table->string('name_crimped')->nulltable();
            $table->string('last_name')->nulltable();
            $table->string('phone')->nulltable();
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
        Schema::dropIfExists('companies');
    }
}
