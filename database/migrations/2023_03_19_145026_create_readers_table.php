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
		Schema::create('readers', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('email')->unique();
			$table->date('register_date')->default(date('Y-m-d'));
			$table->string('city')->nullable();
			$table->string('phone')->nullable();
			$table->integer('number')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('state')->nullable();
			$table->string('address')->nullable();
			$table->timestamps();
		});

		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('readers');
		//
	}
};
