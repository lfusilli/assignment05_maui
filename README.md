# assignment05_maui

Information Architect - Louis Fusilli

Designer - Sidhant Ahluwalia

Coder - Hnin Oo Wai

## Intended Layout

For this website, I decided to create a high-level overview of the topic, which is New York City. There is a homepage, 3 pages to represent the 3 subtopics (people, food, and places), and also the survey/signup page. The h tags are consistent across all of the subpages. At the top is an intro (h2) with 1 paragraph, then an overview (h2) with 2 more detailed paragrapgs, and then the specifics section (also h2) with three single paragraphs labeled with h3 tags.

I came across this particular sample page on the bootstrap website: https://getbootstrap.com/docs/4.1/examples/jumbotron/, and I really liked the way that looked, so I went ahead and built the homepage to look like the sample. The rest of the pages, however, are relying on the default bootstrap styles for the time being.

I've always liked the way our team's assignment 3 layout was done, a simple F-pattern which can be found at http://urcsc174.org/midterm/lfusilli/about.php. I created a similar solution for my midterm (http://urcsc174.org/midterm/lfusilli/about.php). I feel that this type of look would work well for the structure of the pages.

## Intended mood/feeling

A modern look seems most appropriate to complement the always forward-thinking city of New York. To achieve this, there should be abundant spacing between elements, and also exclusively sans-serif fonts should be used. It would be great if the overall look and feel of the website could be reminiscent of the NYC subway system. A dark background (but not black because that wouldn't look great on a screen), with primarily white text for the body but then vibrantly colored headings and buttons perhaps, to emulate the different colored subway lines. I installed bootstrap mainly so I could achieve the look I was going for on the homepage, but if the designer prefers to create his own CSS that works too.

## Intended Interactivity

For the admin system, I found this particular version from phpflow (https://www.phpflow.com/php/addedit-delete-record-using-bootgrid-php-mysql/) to be relatively straightforward easy to implement. However, if the coder is more comfortable using a different system, that is totally fine. 

I also put the required survey on its own page, and listed the action attribute as "survey.php" (script to be created by the coder). The survey is placed at the end of the main content pages in the navbar, so as the user progresses through from the home page, through the other content pages, he/she will end at the survey and hopefully fill it out.

The login system should be placed at the opposite end of the navbar, to demonstrate that it is not associated with the actual content of the website, and has a completely different function. By clicking on the admin dropdown menu, the administrator will see the option to login. Clicking on the login option brings the admin to the login screen (which will be styled the same as the rest of the website with a large background image). Here, the admin can either login or create an account to log in by clicking on the create an account option (also styled like the rest of the site). Once logged in, the database screen will have a plain white background to inform the user that this is the admin side of the website, and is not what a regular user would see.