<?php
include('php/sesstion.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <head>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
    <script src="javascript/theame.js"></script>
  </head>
  <style>
    body {
      margin: 0;
    }

    .navbar {
      border-bottom: 2.5px solid rgb(229, 226, 179);
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: rgb(248, 245, 197);
      padding: 10px 20px;
      gap: 100px;
      color: black;

    }

    .navbar img {
      height: 70px;
      border-radius: 1rem;
      font-weight: 800;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 60px;
    }

    .nav-links li {
      display: inline;

    }

    .nav-links a {
      color: black;
      text-decoration: none;
      font-size: 1.5rem;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    .user-icon {
      width: 50px;
      height: 50px;
      display: flex;
      margin-right: 4rem;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: bold;
      color: black;
      border-radius: 50%;
      background: linear-gradient(135deg, #ff6600, #ffcc00);
      /* Gradient */
      cursor: pointer;
      box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.3);

    }
  </style>
</head>

<body>
  <nav class="navbar">
    <img src="imag/lg4.png" alt="Logo">
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutmain.php">About</a></li>
      <li><a href="contactmain.php">Contact</a></li>
      <li><a href="feedbackmain.php">Give Feedback</a></li>
      <li><a href="userchoicemain.php" title="Login"><i class=" fa fa-user" style="color: black;"></i></a></li>

    </ul>
    <span></span>
    <div class="avtar">
      <div class="user-icon">

        <a href="#" Theme="#ff6600" title="theme" id="themeToggle">
          <i class="fas fa-adjust"></i> <!-- Universal Theme Toggle -->
        </a>


      </div>
    </div>
  </nav>

</body>

</html>