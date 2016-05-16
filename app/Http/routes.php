<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//use App\Models\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
	return 'about content placeholder';
});

Route::get('about/{subject}', function ($subject) {
	return "{$subject} content placeholder";
});

Route::get('contact', function () {
	return view('contact');
});

Route::get('dbedit', function () {

	
	$group = Group::find(1);
	$group->name = 'MyGroup Changed';
	$group->save();
	return $group->name;
	
	/*
	$group = new Group;
	$group->parent_id = 25;
	$group->user_id = 12;
	$group->name = "MyGroup";
	$group->description = "Testing the instantiation of MyGroup";
	$group->visible = 1;
	$group->save();
	*/
	
	/*
	Schema::create('groups', function($newtable) {
		$newtable->increments('id');
		$newtable->integer('parent_id');
		$newtable->string('name');
		$newtable->text('description');
		$newtable->date('added');
		$newtable->boolean('visible');
		$newtable->timestamps();
	});
	*/
	
	return 'database edits have been done';
});