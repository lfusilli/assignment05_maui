<?php include 'inc/html-top.inc';?>

	<div class="container">

		<img class="big_img" src="images/ws.jpg" alt="food">

	<h1>The Many Sights of New York City</h1>
	<!--content from https://en.wikivoyage.org/wiki/New_York_City-->

	<h2 class="blue">Intro</h2>
	<p>Tourism is a vital industry for New York City, which has witnessed a growing combined volume of international and domestic tourists, receiving a seventh consecutive annual record of approximately 61 million visitors in 2016. Tourism had generated an all-time high US$61.3 billion in overall economic impact for New York City in 2014, pending 2015 statistics. Approximately 12 million visitors to New York City were from outside the United States, with the highest numbers from the United Kingdom, Canada, Brazil, and China. In 2016, New York City tourism attained a record high for the sixth year in a row.<p>

	<h2 class="red">Overview</h2>
	<p>New York City receives over 60 million foreign and American tourists each year. Major destinations include the Empire State Building, Ellis Island, the Statue of Liberty on Liberty Island, Broadway theatre productions, Central Park, Times Square, Coney Island, the Financial District, museums, sports stadiums, luxury shopping along Fifth and Madison Avenues, and events such as the Tribeca Film Festival.</p>

	<p>New York City has over 28,000 acres (110 km2) of parkland and 14 linear miles (22 km) of public beaches. Manhattan's Central Park, designed by Frederick Law Olmsted and Calvert Vaux, is the most visited city park in the United States. Prospect Park in Brooklyn, also designed by Olmsted and Vaux, has a 90-acre (36 ha) meadow. Flushing Meadows-Corona Park in Queens, the city's third largest, was the setting for the 1939 World's Fair and 1964 World's Fair.</p>

	<h2 class="green">Specifics</h2>


	<div class="layout">
	<img src="images/t.jpg" alt="square">
	<h3>Times Square</h3>
	<p>Times Square is a section of Manhattan, New York City. It is a major center for tourism, show business and commerce. The square is at the meeting point of Broadway, Seventh Avenue and 42nd street. It is named for the New York Times which formerly had its main building there. One of the biggest stations in the New York City Subway system is under Times Square. The well-known city street area is probably most famous for its New Year's Eve ball drop that happens every year. It is one of the most famous sights of New York.</p>
	<p>Times Square functions as a town square, but is not a square in the geometric sense of a polygon; it is more of a bowtie shape, with two triangles emanating roughly north and south from 45th Street, where Seventh Avenue intersects Broadway. Broadway runs diagonally, crossing through the horizontal and vertical street grid of Manhattan laid down by the Commissioners' Plan of 1811, and that intersection creates the "bowtie" shape of Times Square.</p>
	</div>

	<div class="layout">
	<img src="images/es.jpg" alt="State">
	<h3>The Empire State Building</h3>
	<p>A legend from the moment it was finished in 1931, the Empire State Building is a 102-story[b] Art Deco skyscraper in Midtown Manhattan, New York City. The building has a roof height of 1,250 feet (380 m) and stands a total of 1,454 feet (443.2 m) tall, including its antenna. Its name is derived from "Empire State", the nickname of New York.  In 2013, Time magazine noted that the Empire State Building "seems to completely embody the city it has become synonymous with".</p>
	<p>The site of the Empire State Building, located on the west side of Fifth Avenue between West 33rd and 34th Streets, was originally part of an early 18th century farm. In the late 1820s, it came into the possession of the prominent Astor family, with John Jacob Astor's descendants building the Waldorf–Astoria Hotel on the site in the 1890s. By the 1920s, the family had sold the outdated hotel and the site indirectly ended up under the ownership of Empire State Inc., a business venture that included businessman John J. Raskob and former New York governor Al Smith. </p>

	</div>

	<div class="layout">
	<img src="images/lib.jpg" alt="Liberty">
	<h3>The Statue of Liberty</h3>
	<p>The Statue of Liberty,is a monument symbolising the United States. It was given to the United States by the people of France in 1886, to represent the friendship between the two countries established during the American Revolution. The statue is on Liberty Island in New York Harbor, and it welcomes visitors, immigrants, and returning Americans travelling by ship. The Statue of Liberty is one of the most recognizable symbols in the world.</p>
	<p>The Statue of Liberty is a figure of a robed woman representing Libertas, a Roman liberty goddess. She holds a torch above her head with her right hand, and in her left hand carries a tabula ansata inscribed in Roman numerals with "JULY IV MDCCLXXVI" (July 4, 1776), the date of the U.S. Declaration of Independence. A broken chain lies at her feet. The statue became an icon of freedom and of the United States, and was a welcoming sight to immigrants arriving from abroad.</p>
	</div>
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
