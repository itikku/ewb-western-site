<?php
    function debug_to_console( $data ) {
        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }
    $sponsorship_url = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EWB Western - Events</title>
	<meta name="description" content="EWB Western is committed to creating globally-minded change agents who serve as passionate ambassadors in their communities." />
	<meta name="viewport" content="width=device-width" />

	<!-- load bootstrap and fontawesome -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />
	
	<link rel="stylesheet" href="main.css"/>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script.js"></script>
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.2/angular-resource.min.js"></script>
-->
</head>
<body>
	<div>
        <!--Navbar, if necessary
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="">
						EWB Western
					</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href=""><i class="fa fa-home"></i> Bleh Events 
						</a>
					</li>
				</ul>
			</div>
		</nav>
        -->
	</div>
	<div id="header">
        <a href="/">
            <img class="logo" src="resources/logo.jpg" alt="EWB Western logo">
        </a>
        
        <div class="container">
		    <div class="jumbotron title">
                <span class="bold">
                    EWB Western University Chapter
                </span>
                <div>
                    <a class="button sponsor" href="<?php $sponsorship_url?>">
                        Sponsor Us
                    </a>
                    <a class="button events" href="events.php">
                        Our Events
                    </a>
                    <a class="button presentations" href="presentations.php">
                        Presentations
                    </a>
                </div>
            </div>
	    </div>
        <div id="vision">
            Committed to creating globally-minded change agents who serve as passionate ambassadors in their communities.
        </div>
	</div>
    <!--
    Sponsor Us -> Link to a sponsorship PDF

    Have a text file with a pre-defined structure, that PHP code will loop through to create content
    Break Symbol
    Event Name:
    Event Date:
    Event Photo:
    Break Symbol


    Contact Information: Email, Facebook, Twitter
        - For information
        - For resources
    -->
</body>
</html>