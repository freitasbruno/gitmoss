<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function($newtable) {
			$newtable->increments('id');
			$newtable->integer('user_id');
			$newtable->string('name');
			$newtable->string('url');
			$newtable->text('description');
			$newtable->date('added');
			$newtable->boolean('visible');
			$newtable->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('repositories');
    }
}
