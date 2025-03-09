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
      border-bottom: 2.5px solid rgb(229, 226, 179);
      color: black;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: rgb(248, 245, 197);
      padding: 10px 20px;

      gap: 80px;

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

    form {
      padding-left: 7px;
    }

    .search-box {
      margin: 0;
      padding: 0;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      padding-left: 5px;

    }

    .search-box input {
      background-color: rgb(245, 244, 229);
      width: 80%;
      padding: 10px 40px 10px 10px;
      border: 1px solid #ccc;
      border-radius: 25px;
      outline: none;
      font-size: 16px;
      text-align: center;
    }

    .search-box button {
      position: absolute;
      right: 10px;
      background: none;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>



  <nav class="navbar">
    <img src="imag/lg4.png" alt="Logo">
    <ul class="nav-links">
      <li><a href="/Abhiphp/MailServer/user/index.php">Home</a></li>
      <li><a href="/Abhiphp/MailServer/user/aboutmain.php">About</a></li>
      <li><a href="/Abhiphp/MailServer/user/contactmain.php">Contact</a></li>
      <li><a href="/Abhiphp/MailServer/user/inboxmain.php">Inbox</a></li>
      <!-- <li><a href="/Abhiphp/MailServer/user/php/inbox.php">Inbox</a></li> -->

      <li><a href="/Abhiphp/MailServer/user/sentemail.php">Sent Mail</a></li>

      <li>
        <form action="php/search.php" method="post">
          <div class="search-box">
            <input type="text" name="search" placeholder="Search Mails" required>
            <button type="submit" name="btn">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>

      </li>
      <li><a href="/Abhiphp/MailServer/main/index.php" title="Logout"> <i class="fas fa-sign-out-alt"
            style="color: black;"></i></a>
      </li>
    </ul>
    <span></span>
  </nav>


  </script>
</body>

</html>