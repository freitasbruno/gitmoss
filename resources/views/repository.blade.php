<?php
	$repository = Repository::find($repository_id);
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>GitMoss</title>
		<!-- General CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap Core CSS -->
    	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>	
	</head>
    <body id="myCss">
    	
    	<div id="repository_name" style="display:none">{{ $repository->name }}</div>
    	<div id="repository_url" style="display:none">{{ $repository->url }}</div>
    	
        <div class="container">
            <div class="content">
                <div class="title">GitMoss</div>
                <a href="{{ URL::to('profile') }}" class="myBtn">BACK TO PROFILE</a>
                <hr>
            	<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="{{ $repository->icon }}" alt="{{ $repository->name }}"/>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8">
						<h2>{{ $repository->name }}</h2>
						<h4>{{ $repository->url }}</h4>
					</div>
                </div>
                <hr>
				<div id="repository_content"></div>
            </div>
        </div>
        
        <!-- jQuery -->
	    <script src="{{ asset('js/jquery.js') }}"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	    
        <!-- JS Files -->
		<script type="text/javascript" src="{{ asset('js/get_repository.js') }}"></script>
		
    </body>
</html>
