<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

  <head>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
  </head>
  <style>
    body {
      margin: 0;

    }

    .navbar {
      display: flex;
      border-bottom: 2.5px solid rgb(229, 226, 179);
      color: black;
      align-items: center;
      justify-content: space-between;
      background-color: rgb(248, 245, 197);
      padding: 10px 20px;
      gap: 100px;

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
  </style>
</head>

<body>



  <nav class="navbar">
    <img src="imag/lg4.png" alt="Logo">
    <ul class="nav-links">
      <li><a href="/Abhiphp/MailServer/main/index.php">Home</a></li>
      <li><a href="/Abhiphp/MailServer/admin/aboutmain.php">About</a></li>
      <li><a href="/Abhiphp/MailServer/Admin/contactmain.php">Contact</a></li>
      <li><a href="/Abhiphp/MailServer/Admin/viewuserdata.php">View User</a></li>
      <li><a href="/Abhiphp/MailServer/Admin/userfeedmain.php"> Veiw Feedback</a></li>


      <li><a href="/Abhiphp/MailServer/main/index.php" title="Logout"> <i class="fas fa-sign-out-alt"
            style="color: black;"></i></a>
      </li>
    </ul>
    <span></span>

  </nav>

</body>

</html>