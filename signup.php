<?php include 'inc/html-top.inc';?>

	<div class="container">

	<h1>Learn More!</h1>
	<p>Answer a few survey questions below and enter your contact information to be added to our mailing list.</p>
	<hr>

		<div class="container-fluid">

		<form action="survey.php" method="post">
		<fieldset class="info">

			<label for="name">Name:</label>
			
    		<input type="text" name="name">
    		<br><br>

    		<label for="email">Email:</label>
    		
    		<input type="email" name="email">
    		<br><br>

    		<label for="relationship">How would you describe your relationship to New York City?</label>
    		<br>
			<input type="radio" name="relationship" value="native" checked> I'm from there.<br>
  			<input type="radio" name="relationship" value="close"> I'm not from the city but feel like I am.<br>
  			<input type="radio" name="relationship" value="tourist"> I am strictly a tourist.
  			<br><br>

  			<label for="updates">Which of the following topics would you like to receive updates about?</label>
  			<br>
  			<input type="checkbox" name="people" value="people"> The People<br>
  			<input type="checkbox" name="food" value="food"> The Food<br>
  			<input type="checkbox" name="sights" value="sights"> The Sights<br><br>

  			<input type="submit" onclick="alert('Thank you! Your info has been added.')" value="Sign me up!">

		</fieldset>
		</form>
		</div><!--form-->

	<?php include 'inc/footer.inc';?>

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
