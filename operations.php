<?php

# @Author: Callum Bass
# @Date:   2020-03-15T16:44:33+00:00
# @Email:  w1682693@my.westminster.ac.uk
# @Project: 5COSC003W - Coursework 2
# @Last modified by:   Callum Bass
# @Last modified time: 2020-03-16T20:04:01+00:00


# Returns the header html code, can be printed at top of HTML document
function getHeader($title) {
  return '
  <head>
<title>Dashboard - '.$title.'</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css?'.time().'">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">

  </head>';
}


function getDateTimeOutput() {
  $date = date('m/d/Y h:i:s a', time());
return $date;

}

function getSideNav() {
  return '
  <aside class="side-nav">
  <div class="nav-logo">
  <img src="img/small-logo.svg">
  <p>DASHBOARD</p>
  </div>
  <ul>

  <li class="nav-small-title">MAIN</li>
  <li class="nav-item"><a href="index.php">Home</a></li>
  <li class="nav-item"><a href="#">About Us</a></li>
  <li class="nav-item"><a href="#">Contact Us</a></li>

  <li class="nav-small-title">ACCOUNT</li>
  <li class="nav-item"><a href="login.php">Login</a></li>
  <li class="nav-item"><a href="#">Sign Up</a></li>

<li class="nav-small-title statistics">'.getDateTimeOutput().'</li>
  </ul>
  </aside>
  ';

}


?>
