<?php include 'inc/html-top.inc';?>

	<div class="container">

		<img class="big_img" src="images/food.jpg" alt="food">

		<h1>The Food of NYC</h1>
		<!--content for this page derived from https://www.bbcgoodfood.com/howto/guide/top-10-foods-try-new-york-->

		<h2 class="yellow">Intro</h2>
			<p>Along with the Statue of Liberty, yellow cabs and skyscrapers, food is a quintessential component of New York City. The city's status as a cultural melting pot means you can eat your way across the globe within the confines of one city, taking in some rather iconic dishes along the way.</p>

		<h2 class="orange">Overview</h2>
			<p>The cuisine of New York City comprises many cuisines belonging to various ethnic groups that have entered the United States through the city. Almost all ethnic cuisines are well represented in New York City, both within and outside the various ethnic neighborhoods. New York City was also the founding city of New York Restaurant Week which has spread around the world due to the discounted prices that such a deal offers. In New York City there are over 12,000 bodegas, delis and groceries and many among them are open 24/7.</p>

			<p>New York City's food culture includes an array of international cuisines influenced by the city's immigrant history. Central European and Italian immigrants brought bagels, cheesecake, and New York-style pizza into the city, while Chinese and other Asian restaurants, sandwich joints, trattorias, diners, and coffeehouses have become ubiquitous. The city is home to "nearly one thousand of the finest and most diverse haute cuisine restaurants in the world", according to Michelin.</p>

		<h2 class="red">Specifics</h2>

			<div class="layout">
		<img src="images/pizza.jpg" alt="Pizza">
			<h3>Pizza</h3>
			<p>New York pizza boasts a thin crust topped with sweet marinara sauce flecked with heaps of oregano and a heavy-hand of mozzarella. Pizza spots dot the city’s streets, perfect for picking up “a slice,” as locals do, at any time of day or late into the night. Neapolitan immigrants landing in NY in the late 1800s are credited for bringing pizza to the city and it was Gennaro Lombardi, who opened the city’s first pizzeria in 1897. Lombardi’s on Spring Street still stands today.</p>

			<p>New York-style pizza is pizza made with a characteristically large hand-tossed thin crust, often sold in wide slices to go. The crust is thick and crisp only along its edge, yet soft, thin, and pliable enough beneath its toppings to be folded in half to eat. </p>
</div>

<div class="layout">
		<img src="images/bagles.jpeg" alt="Bagles">
			<h3>Bagels</h3>
			<p>A great New York bagel will bring locals to tears. A long-rise yeast bread with a ring shape, bagels are boiled before baked, creating a shiny exterior that yields to a doughy centre (legend credits local water for the unique NY bagel taste). It was Eastern European Jewish immigrants that brought bagels to New York in the late 1800s. Today, step into most delis or bagel shops – or make a trip to Ross &amp; Daughters – for a sesame bagel sandwiching smoked salmon lox and copious cream cheese.</p>

			<p>A New York bagel has a shiny crust with a little bit of hardness to it and a nice glaze. The inside is very chewy, but not overly doughy. It’s got a slight tang to the taste, and it’s not too big,” she said. “But some people might disagree</p>
</div>

<div class="layout">
		<img src="images/hotdogs.jpg" alt="hotdogs">
			<h3>Hot Dogs</h3>
			<p>Hot dogs are as ubiquitous to New York as yellow taxis. Traditionally made of ground pork, beef or both, these frankfurter-style sausages are flavoured with garlic, mustard and nutmeg before being encased, cured, smoked and cooked. Trek to Brooklyn to visit Original Nathan’s Famous Frankfurters, opened in 1915 by German-born Charles Feltman who conceived of the hot dog while pushing a pie cart along Coney Island’s boardwalk. Or, stop by the street carts on city corners for garlicky hot dogs with grainy mustard and tangy sauerkraut.</p>
			<p>The white hot or "porker" is a variation on the hot dog found in the upstate area. It is composed of some combination of uncured and unsmoked pork, beef, and veal; it is believed that the lack of smoking or curing allows the meat to retain a naturally white color. White hots are almost exclusively eaten with mustard, specifically spicy brown, and other spices, and often include a dairy component such as nonfat dry milk.</p>
</div>

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
