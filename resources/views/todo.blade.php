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
                <h2>Project - TO DO</h2>
				<form role="form" class="todolist">
				    @foreach($todolist as $todosection)
				    <h3>{{$todosection['name']}}</h3>
				        @foreach($todosection as $todo => $status)
    					<div class="checkbox">
    						@unless($todo == 'name')
	    						@if($status == 'complete')
	    						<label><input type="checkbox" value="" checked disabled>{{$todo}}</label>
	    						@else
	    						<label><input type="checkbox" value="" disabled>{{$todo}}</label>
	    						@endif
	    					@endunless
    					</div>
    					@endforeach
    				@endforeach
				</form>
            </div>
        </div>
    </body>
</html>
