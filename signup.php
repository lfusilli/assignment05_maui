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
	        <li><a href="sights.php">Sights</a></li>
	        <li class="active"><a href="signup.php">Signup</a></li>
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

	<h1>Learn More!</h1>
	<p>Answer a few survey questions below and enter your contact information to be added to our mailing list.</p>
	<hr>

		<div class="container-fluid">

		<form action="survey.php" method="post">
		<fieldset>

			Name:
    		<input type="text" name="name">
    		<br><br>
    		Email:
    		<input type="email" name="email">
    		<br><br>

    		How would you describe your relationship to New York City?<br>
			<input type="radio" name="relationship" value="native" checked> I'm from there.<br>
  			<input type="radio" name="relationship" value="close"> I'm not from the city but feel like I am.<br>
  			<input type="radio" name="relationship" value="tourist"> I am strictly a tourist.
  			<br><br>

  			Which of the following topics would you like to receive updates about?<br>
  			<input type="checkbox" name="people" value="people"> The People<br>
  			<input type="checkbox" name="food" value="food"> The Food<br> 
  			<input type="checkbox" name="sights" value="sights"> The Sights<br><br>

  			<input type="submit" onclick="alert('Thank you! Your info has been added.')" value="Sign me up!">

		</fieldset>
		</form>
		</div><!--form-->

	</div><!--container-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>