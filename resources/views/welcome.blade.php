<!DOCTYPE html>
<html>
	<head>
	    <title>GitMoss</title>
		<!-- General CSS -->
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	    
	    <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>		
		<!-- JS Files -->
		<script type="text/javascript" src="{{ URL::asset('/js/custom.js') }}"></script>
	</head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GitMoss</div>
                <a href="{{ URL::to('login') }}" class="myBtn">LOGIN</a>
                <a href="{{ URL::to('todo') }}" class="myBtn">PROJECT PROGRESS</a>
                <a href="{{ URL::to('contact') }}" class="myBtn">CONTACT PAGE</a>
            </div>
        </div>
    </body>
</html>
