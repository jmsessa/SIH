<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePessoasTable.
 */
class CreatePessoasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoas', function(Blueprint $table) {
            $table->increments('id_pessoas');
           

            //Dados de Login
            $table->string ('password',100)->unique();
            $table->string ('number_user',10)->unique();

            //Dados Pessoais
             $table->string ('name',255)->unique();
            $table->date ('born');
            $table->string ('sexo',20);
            $table->string ('address',255);
            $table->string ('city');
            $table->string ('postal_code',20);
            $table->string ('phone',20)
            $table->string ('email',90)->unique();
            $table->string ('n_bi',20)->unique();

            // Permissão no Sistema
            $table->string ('description',10)-> default('app.pessoa');
            $table->string ('status',10)-> default('active');
          
          	$table-> rememberToken();

            $table->timestamps();
            $table->softDeletes();

            /*
            created_at
            updated_at
            deleted_at
            */
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoas', function(Blueprint $table) {

		)};
		Schema::drop('pessoas');
	}
}
