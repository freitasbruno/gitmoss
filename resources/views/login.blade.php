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
                <h2>Login Form</h2>
				<a href="{{ URL::to('register') }}">I'm a new user!</a>
				{!! Form::open(array('url' => 'login')) !!}
					{!! csrf_field() !!}
					{!! Form::label('email', 'Email Address') !!}
					{!! Form::text('email') !!}
					<br>
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password') !!}
					<br>
					{!! Form::submit('Login', array('class' => 'myBtn')) !!}
				{!! Form::close() !!}
				
            </div>
        </div>
    </body>
</html>
