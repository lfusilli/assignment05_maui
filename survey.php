<?php include 'inc/html-top.inc';?>


    <div class="container">


      <!--php info here-->
     <?php

        // 1. Create a database connection

        /* Database credentials. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'urcscon3_maui');
        define('DB_PASSWORD', 'urcscon3_maui');
        define('DB_NAME', 'urcscon3_maui');

        /* Attempt to connect to MySQL database */
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }


        $name = Trim(stripslashes($_POST['name']));

        $email = Trim(stripslashes($_POST['email']));

        $relationship = Trim(stripslashes($_POST['relationship']));

        $people = Trim(stripslashes($_POST['people']));

        $food = Trim(stripslashes($_POST['food']));

        $sight = Trim(stripslashes($_POST['sights']));


        //variable for checkboxes
        $interest .= "";

            if (isset($people)) {		// a checkbox variable
                $interest .= $people . ", ";	// the same checkbox variable
            }
            if (isset($food)) {		// a checkbox variable
                $interest .= $food . ", ";	// the same checkbox variable
            }
            if (isset($sight)) {		// a checkbox variable
                $interest .= $sight;	// the same checkbox variable
            }


            //inserting data into the database
            $query = "INSERT INTO survey (name, email, relationship, interest) VALUES ('$name','$email','$relationship', '$interest')";

            $result = mysqli_query($link, $query);

            // 4. Close database connection
            mysqli_close($link);


      ?><!--php-->

        <h1>Thank you <?php echo $name; ?>!</h1><br />

        <h2>Thank you for visiting our website, you have been added to our mailing lists!</h2>

        <br />

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>



</html>

