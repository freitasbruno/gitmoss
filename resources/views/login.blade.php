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
                <a href="{{ URL::to('register') }}" class="myBtn">I'm a new user!</a>
                <h2>Login Form</h2>
				{!! Form::open(array('url' => 'login')) !!}
					{!! csrf_field() !!}
					{!! Form::label('email', 'Email Address') !!}
					{!! Form::text('email') !!}
					<br>
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password') !!}
					<br>
					{!! Form::submit('Login', array('class' => 'formBtn')) !!}
				{!! Form::close() !!}
				
            </div>
        </div>
    </body>
</html>
