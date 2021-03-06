<?php

/**
 * Creates the initial Inspection Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.6 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Inspection Table Migration *//
class CreateInspectionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inspection', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('approval_id') 	->unsigned()->index();
			$table->integer('comments_id')	->unsigned()->index()->nullable();

			// Attributes
			$table->boolean('pass');
			$table->integer('rejected') 	->unsigned();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index()->nullable();
			$table->integer('updated_by') 	->unsigned()->index()->nullable();
			$table->integer('deleted_by') 	->unsigned()->index()->nullable();
			$table->integer('current_id') 	->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inspection');
	}
}