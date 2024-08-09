<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('role_id');
			$table->foreign('role_id')->references('id')->on('user_roles')->onDelete('cascade');
			$table->unsignedBigInteger('practice_location_id');
			$table->foreign('practice_location_id')->default(1)->references('id')->on('practice_locations');
			$table->unsignedBigInteger('speciality_id');
			$table->foreign('speciality_id')->default(1)->references('id')->on('specialities');
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('gender');
			$table->string('dob');
			$table->string('ssn')->unique();
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->integer('zip_code');
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->unique(['first_name', 'last_name', 'dob']);
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
