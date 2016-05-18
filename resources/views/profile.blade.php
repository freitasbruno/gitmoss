<?php

	$user = Auth::user();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GitMoss</title>

		<!-- General CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>		
		<!-- JS Files -->
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <a href="{{ URL::to('/') }}"><div class="title">GitMoss</div></a>
                <h2>Welcome back {{ $user->name }}</h2>
                <a href="{{ URL::to('logout') }}" class="myBtn">Logout</a>
                
                <h2>My Github Projects</h2>
            </div>
        </div>
    </body>
</html>
