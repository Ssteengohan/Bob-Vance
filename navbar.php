<?php

// This is the navbar file. It is included in every page of the site.
// It is used to display the navigation bar at the top of the page\
function navbar()
{
	
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>


  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="login.php">login</a></li>
  			<li><a href="post.php">Post</a></li>
  			<li><a href="aboutbob.php">Bob Vance</a></li>
  			<li><a href="aboutus.php">About us</a></li>
  		</ul>
  	</nav>

    
</body>
</html>';
}

function navbar1()
{
	
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>


  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="loguit.php">log uit</a></li>
  			<li><a href="post.php">Post</a></li>
  			<li><a href="aboutbob.php">Bob Vance</a></li>
  			<li><a href="aboutus.php">About us</a></li>
  		</ul>
  	</nav>

    
</body>
</html>';
}









?>