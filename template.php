<!-- <?php
    require ('steamauth/steamauth.php');  
    require ('mysql-settings.php'); 
	
	// Create connection
	$conn = new mysqli($dbAddress, $dbUserName, $dbPassword, $dbDatabase);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBall.tf</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container container-mod">

        <div class="header">
            <br>
            <img class="media-object img-rounded img-responsive" src="img/banner2.png">
            <hr>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="news.php">News</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="league.php">League</a></li>
                <li><a href="servers.php">Servers</a></li>
                <li><a href="tutorial.php">Tutorial</a></li>
                <li><a href="stream.php">Stream</a></li>
            </ul>
        </div>

        <br>
        <br>


        <div class="row container-fluid">
            <div class="col-md-9">
                SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>SOME CONTENT WILL BE HERE<br>
            </div>

            <div class="col-md-3 sidebar" align="center">

                <!-- <?php
                    if(!isset($_SESSION['steamid'])) {
                        echo "<div style='margin: 30px auto; text-align: center;'>Welcome!";
                        echo steamlogin();
                        echo "</div>";
                    }  else {
                        include ('steamauth/userInfo.php');
                        echo "<img class='img-rounded img-responsive' src='".$steamprofile['avatarfull']."'>";
                        echo "Welcome, " . $steamprofile['personaname']."!<br><br><a href='steamauth/logout.php'>Log out</a>";
                    }
?> -->

            </div>
        </div>
        
        <div class="footer">
            
                
                    
								This page is powered by <a href="http://steampowered.com">Steam</a> and <a href="https://github.com/SmItH197/SteamAuthentication">SteamAuthentication</a>
							
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            </div>

    </div>
</body>

</html>

<!--<?php

mysqli_close($conn);

?>-->
