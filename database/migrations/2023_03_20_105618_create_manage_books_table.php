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
		Schema::create('manage_books', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('reader_id')->unsigned();
			$table->bigInteger('book_id')->unsigned();
			$table->foreign('reader_id')->references('id')->on('readers')->onDelete('cascade');
			$table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
			$table->string('date_withdrawal');
			$table->string('date_return')->nullable();
			$table->timestamps();
			$table->index('reader_id');
			$table->index('book_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('manage_books'); #, function (Blueprint $table) {
		#$table->dropForeign('lists_reader_id_foreign');
		#			$table->dropForeign('lists_book_id_foreign');
		#			$table->dropColumn('reader_id');
		#			$table->dropColumn('book_id');
		#});
	}
};
