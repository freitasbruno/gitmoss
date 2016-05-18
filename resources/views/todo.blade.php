<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Slabo 27px', serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
            	font-family: 'Lato';
                font-size: 96px;
            }
            
            form {
            	text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GitMoss</div>
                <h2>Project - TO DO</h2>
				<form role="form">
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
