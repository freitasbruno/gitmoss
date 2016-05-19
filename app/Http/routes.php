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

Route::get('register', function () {
	return view('register');
});

Route::post('register', function () {
	$user = new User;
	$user->email = Input::get('email');
	$user->name = Input::get('name');
	$user->password = Hash::make(Input::get('password'));
	$user->save();
	
	$theEmail = Input::get('email');
	return view('thanks', array('theEmail' => $theEmail));
});

Route::get('login', function () {
	return view('login');
});

Route::post('login', function () {
	$credentials = Input::only('email', 'password');
	if(Auth::attempt($credentials)) {
		$user = Auth::user();
		$current_group = 0;
		session()->put('user_id', $user->id);
		session()->put('current_group', $current_group);
		return Redirect::to('profile');
	}
	return view('login');
});

Route::get('logout', function () {
	Auth::logout();
	return view('logout');
});

Route::get('profile', array(
	'middleware' => 'auth', 
	function () {
		return view('profile');
}));

Route::post('profile', function () {
	$group = new Group;
	$group->parent_id = session()->get('current_group');
	$group->user_id = session()->get('user_id');
	$group->name = Input::get('name');
	$group->description = "Testing the creation of Groups";
	$group->visible = 1;
	$group->save();
	
	$theEmail = Input::get('email');
	return view('profile');
});

Route::get('search', function () {
	return view('search');
});

Route::get('todo', function () {
	$todolist = array(
		array(
			'name' => 'Installation and Laravel requisites',
			'Install LAMP' => 'complete',
			'Install cURL' => 'complete',
			'Install Composer with cURL' => 'complete',
			'Install Laravel with composer' => 'complete'			
			),
		array(
			'name' => 'Testing Laravel',
			'Introduction to routes' => 'complete',
			'Creating a new view' => 'complete'
			),
		array(
			'name' => 'Using a Database',
			'Adding a new database' => 'complete',
			'Using migrations for table creation/deletion' => 'complete',
			'Using Eloquent ORM' => 'complete'
			),
		array(
			'name' => 'Developing the application',
			'Working with blade templates' => 'complete',
			'Integrating forms' => 'complete',
			'Handling user authentication' => 'complete',
			'Creating and displaying user groups' => 'complete',
			'Github search and results display' => '',
			'Saving repositories to the database' => '',
			'Adding Github profiles' => '',
			'Autoload Github profile(s) repositories' => ''			
			)
		);
		
    return view('todo', array('todolist' => $todolist));
});

Route::get('tutorial', function () {
	return view('tutorial');
});

Route::get('contact', function () {
	return view('contact');
});

Route::get('about', function () {
	return 'about content placeholder';
});

Route::get('about/{subject}', function ($subject) {
	return "{$subject} content placeholder";
});

Route::get('dbedit', function () {
	
	/*
	$group = Group::find(1);
	$group->name = 'MyGroup Changed';
	$group->save();
	return $group->name;
	*/
	/*
	$group = new Group;
	$group->parent_id = 35;
	$group->user_id = 1;
	$group->name = "AbcMyGroup";
	$group->description = "Testing the order display of Groups";
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