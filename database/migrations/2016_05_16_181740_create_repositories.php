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
			$newtable->integer('group_id');
			$newtable->string('name');
			$newtable->string('url');
			$newtable->string('icon');
			$newtable->text('description');
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
