<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 5 - Maui</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li><a href="index.php"><strong>NY City</strong></a>
	        <li><a href="people.php">People</a></li>
	        <li><a href="food.php">Food</a></li>
	        <li class="active"><a href="sights.php">Sights</a></li>
	        <li><a href="signup.php">Signup</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Login</a></li>
	            <!--
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	        	-->
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">

	<h1>The Many Sights of New York City</h1>
	<!--content from https://en.wikivoyage.org/wiki/New_York_City-->

	<h2>Intro</h2>
	<p>Tourism is a vital industry for New York City, which has witnessed a growing combined volume of international and domestic tourists, receiving a seventh consecutive annual record of approximately 61 million visitors in 2016. Tourism had generated an all-time high US$61.3 billion in overall economic impact for New York City in 2014, pending 2015 statistics. Approximately 12 million visitors to New York City were from outside the United States, with the highest numbers from the United Kingdom, Canada, Brazil, and China. In 2016, New York City tourism attained a record high for the sixth year in a row.<p>

	<h2>Overview</h2>
	<p>New York City receives over 60 million foreign and American tourists each year. Major destinations include the Empire State Building, Ellis Island, the Statue of Liberty on Liberty Island, Broadway theatre productions, Central Park, Times Square, Coney Island, the Financial District, museums, sports stadiums, luxury shopping along Fifth and Madison Avenues, and events such as the Tribeca Film Festival.</p>

	<p>New York City has over 28,000 acres (110 km2) of parkland and 14 linear miles (22 km) of public beaches. Manhattan's Central Park, designed by Frederick Law Olmsted and Calvert Vaux, is the most visited city park in the United States. Prospect Park in Brooklyn, also designed by Olmsted and Vaux, has a 90-acre (36 ha) meadow. Flushing Meadows-Corona Park in Queens, the city's third largest, was the setting for the 1939 World's Fair and 1964 World's Fair.</p>

	<h2>Specifics</h2>

	<h3>Times Square</h3>
	<p>Times Square is a section of Manhattan, New York City. It is a major center for tourism, show business and commerce. The square is at the meeting point of Broadway, Seventh Avenue and 42nd street. It is named for the New York Times which formerly had its main building there. One of the biggest stations in the New York City Subway system is under Times Square. The well-known city street area is probably most famous for its New Year's Eve ball drop that happens every year. It is one of the most famous sights of New York.</p>

	<h3>The Empire State Building</h3>
	<p>A legend from the moment it was finished in 1931, the Empire State Building is a 102-story[b] Art Deco skyscraper in Midtown Manhattan, New York City. The building has a roof height of 1,250 feet (380 m) and stands a total of 1,454 feet (443.2 m) tall, including its antenna. Its name is derived from "Empire State", the nickname of New York.  In 2013, Time magazine noted that the Empire State Building "seems to completely embody the city it has become synonymous with".</p>

	<h3>The Statue of Liberty</h3>
	<p>The Statue of Liberty,is a monument symbolising the United States. It was given to the United States by the people of France in 1886, to represent the friendship between the two countries established during the American Revolution. The statue is on Liberty Island in New York Harbor, and it welcomes visitors, immigrants, and returning Americans travelling by ship. The Statue of Liberty is one of the most recognizable symbols in the world.</p>

	</div><!--container-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	var url = window.location;
	$('ul.nav a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
	</script>
</body>
</html>
