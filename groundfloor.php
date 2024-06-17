<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ground Floor</title>
    <link rel="website icon" type="png" href="image/Logo School.png">
    <link rel="stylesheet" href="css/map.css" />
  </head>
  <body>
  <nav>
    <div class="logo">
      <img src="image/Logo new 2.png" alt="Logo" />
    </div>
    <div class="links">
      <ul>
        <li class="home"><a href="homepage.php">Home</a></li>
        <li class="map"><a href="map.php">Map</a></li>
        <li class="calendar"><a href="calendar.php">Calendar</a></li>
        <li class="customerservice"><a href="customerservice.php">Customer Service</a></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        <div class="profile-info">
      
          <span>My Account</span>
        </div>
      </button>
      <div class="dropdown-content">
        <a href="logout.php">Logout</a>
      </div>
  </nav>
    <div class="main_body">
      <div class="title">
        <h1>Olivarez College Tagaytay</h1>
        <h2>Ground Floor</h2>
        <div class="dropdownmap">
          <button class="dropbtnmap">Ground Floor</button>
          <div class="dropdown-contentmap">
            <a href="map.php">School Map</a>
            <a href="groundfloor.php">Ground Floor</a>
            <a href="secondfloor.php">Second Floor</a>
            <a href="thirdfloor.php">Third Floor</a>
          </div>
        </div>
      </div>
      <div class="image_container">
        <img src="image/Ground Floor.jpg" alt="Image" />
      </div>
    </div>
  </body>
</html>
