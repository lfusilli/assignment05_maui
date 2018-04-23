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
	      	<li class="active"><a href="index.php"><strong>NY City</strong></a>
	        <li><a href="people.php">People</a></li>
	        <li><a href="food.php">Food</a></li>
	        <li><a href="sights.php">Sights</a></li>
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

	<div class="jumbotron">
	  <h1>Hello, New York!</h1>
	  <p>A showcase of America's biggest and most vibrant city.</p>
	</div>

<div class="row">
          <div class="col-md-4">
            <h2>Who to See</h2>
            <p>The people of NYC are unique to the world because they represent the entire world. Find out what makes up one of the most intricate and diverse populations in the world. Meet the people of New Yorl.</p>
            <p><a class="btn btn-primary btn-lg" href="people.php" role="button">Learn more</a></p>
          </div>
          <div class="col-md-4">
            <h2>What to Eat</h2>
            <p>See how the Big Apple puts its flair on food. serving up everything from local and regional classics to exotic and foreign dishes. Find out about all the best restaurants, bars, and cafés.</p>
            <p><a class="btn btn-primary btn-lg" href="food.php" role="button">Learn more</a></p>
          </div>
          <div class="col-md-4">
            <h2>Where to Go</h2>
            <p>With millions of people and hundreds of streets, there is no limit to what you can find in NYC. Here is where you'll find a guide to hotels, attractions, museums, and more. How much can you see?</p>
            <p><a class="btn btn-primary btn-lg" href="sights.php" role="button">Learn more</a></p>
          </div>
        </div>

	</div><!--container-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>