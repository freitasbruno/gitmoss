<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
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
                font-family: 'Lato';
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
                font-size: 96px;
            }
        </style>
        
        <!-- Custom CSS and JS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
		
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Contact Page</div>
                <h3 class="highlight">Contact information area</h3>
            </div>
        </div>
    </body>
</html>
