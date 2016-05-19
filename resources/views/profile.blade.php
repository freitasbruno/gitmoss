<?php
	$user = Auth::user();
	$groups = Group::where('user_id', $user->id)->orderBy('name')->get();
	$currentGroup = session()->get('currentGroup');;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GitMoss</title>

		<!-- General CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>		
    </head>
    <body id="myCss">
        <div class="container">
            <div class="content">
                <a href="{{ URL::to('/') }}"><div class="title">GitMoss</div></a>
                <h2>Welcome back {{ $user->name }}</h2>
                <a href="{{ URL::to('logout') }}" class="myBtn">LOGOUT</a>
            </div>
            <div class="row">
            	<p>Your user ID is {{ session()->get('user_id') }}</p>
            	<h2>My Groups</h2>
            	@foreach($groups as $group)
					<div class="col-md-4">
						<div class="groupBtn">{{ $group->name }}</div>
					</div>
				@endforeach
				<div class="col-md-4">
					<div class="groupBtn" >
					{!! Form::open(array('url' => 'profile')) !!}
						{!! csrf_field() !!}
						{!! Form::text('name', '', array('placeholder'=>'NEW GROUP')) !!}
						{!! Form::submit('+') !!}
					{!! Form::close() !!}
					</div>
				</div>
			</div>
			
			@if($currentGroup)
                <div class="row">
                	
                	<h2>{{ $currentGroup->name }}'s Repositories </h2>
                	<div class="col-md-3">Repository</div>
                </div>
       		@endif
        </div>
        
        <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    
        <!-- JS Files -->
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
		
    </body>
</html>
