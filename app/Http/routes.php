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

Route::post('new_group', function () {
	$group = new Group;
	$group->parent_id = session()->get('current_group');
	$group->user_id = session()->get('user_id');
	$group->name = Input::get('name');
	$group->visible = 1;
	$group->save();
	
	$theEmail = Input::get('email');
	return Redirect::to('profile');
});

Route::post('new_repository', function () {
	$repository = new Repository;
	$repository->group_id = session()->get('current_group');
	$repository->user_id = session()->get('user_id');
	$repository->name = Input::get('name');
	$repository->url = Input::get('url');
	$repository->icon = Input::get('icon');
	$repository->visible = 1;
	$repository->save();
	
	return Redirect::to('profile');
});

Route::get('profile/{group_id}', function ($group_id) {
	session()->set('current_group', $group_id);
	return Redirect::to('profile');
});

Route::get('delete_group/{group_id}', function ($group_id) {
	Group::destroy($group_id);
	return Redirect::to('profile');
});

Route::get('delete_repository/{repository_id}', function ($repository_id) {
	Repository::destroy($repository_id);
	return Redirect::to('profile');
});

Route::get('repository/{repository_id}', function ($repository_id) {
	return view('repository')->with('repository_id', $repository_id);
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
			'Navigating user groups' => 'complete',
			'Creating and displaying saved repositories' => 'complete',
			'Github search and results display' => 'complete',
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
	for($i = 1; $i <= 8; $i++){
		$repo = new Repository;
		$repo->user_id = 1;
		$repo->group_id = 1;
		$repo->name = "Repository". $i;
		$repo->url = "";
		$repo->icon = "https://cdn4.iconfinder.com/data/icons/logos-3/256/laravel-128.png";
		$repo->description = "Testing Repositories";
		$repo->visible = 1;
		$repo->save();
	}
	*/
	/*
	for($i = 1; $i <= 3; $i++){
		for($n = 1; $n <= 5; $n++){
			$group = new Group;
			$group->parent_id = $i;
			$group->user_id = $i;
			$group->name = "Group" + (string)($i*$n);
			$group->visible = 1;
			$group->save();
		}
	}
	*/
	
	/*
	$group = Group::find(1);
	$group->name = 'MyGroup Changed';
	$group->save();
	return $group->name;

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