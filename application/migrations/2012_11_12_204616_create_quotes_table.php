<?php

class Create_Quotes_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotes', function ($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('device');
			$table->string('disarmed');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}