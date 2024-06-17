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
    <title>Map</title>
    <link rel="website icon" type="png" href="image/Logo School.png">
    <link rel="stylesheet" href="./css/map.css" />
    <style>
        #customerButton {
        background-color: #007f45; /* Green background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 15px 32px; /* Some padding */
        text-align: center; /* Centered text */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Make the container fit the button */
        font-size: 16px; /* Increase font size */
        margin: 4px 2px; /* Some margin */
        cursor: pointer; /* Pointer/hand icon */
        border-radius: 12px; /* Rounded corners */
        }
        #customerButton:hover {
            background-color: #007f45; /* Darker green */
        }
    </style>
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
        <li class="calendar"><a href="calendar.php">Reservation</a></li>
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
        <h2>School Map</h2>
        <div class="dropdownmap">
          <button class="dropbtnmap">School Floor</button>
          <div class="dropdown-contentmap">
            <a href="groundfloor.php">Ground Floor</a>
            <a href="secondfloor.php">Second Floor</a>
            <a href="thirdfloor.php">Third Floor</a>
          </div>
        </div>
      </div>
      <div class="image_container">
        <img src="image/3d School.jpg" alt="Image" />
      </div>
    </div>
  </body>
</html>
