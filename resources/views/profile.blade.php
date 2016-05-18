<?php

	$user = Auth::user();
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GitMoss</div>
                <h2>Welcome back {{ $user->name }}</h2>
                <a href="{{ URL::to('logout') }}">Logout</a>
            </div>
        </div>
    </body>
</html>
