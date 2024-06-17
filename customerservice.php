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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Service</title>
    <link rel="website icon" type="png" href="image/Logo School.png">
    <link rel="stylesheet" href="./css/customerservice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
<div class="page">
    <div class="content">
        <section id="team">
            <div class="aboutus">
                <div class="card">
                    <img src="./image/Franz.jpg" />
                    <h2>Franz Naces</h2>
                    <p>Full-Stack Developer</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="./image/Ej.jpg" />
                    <h2>Emmanuel Salvacion</h2>
                    <p>Back-End Developer</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="./image/King.jpg" />
                    <h2>King Dangilan</h2>
                    <p>Front-End Developer</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="aboutus">
                <div class="card">
                    <img src="./image/Vaughn.jpg" />
                    <h2>Vaughn de Sagun</h2>
                    <p>Project Manager</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="./image/Mat.jpg" />
                    <h2>Matthew Bueno</h2>
                    <p>Capstone Adviser</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="./image/Ainah.jpg" />
                    <h2>Ainah Cielos</h2>
                    <p>Test Manager</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="button-container">
            <a href="homepage.php" class="btn">Return Home</a>
        </div>
    </div>
</div>
</body>
</html>
