<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <style>
    body {}

    .container {

      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 20%;
    }

    h2 {
      margin-bottom: 20px;
    }

    input {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login {
      width: 100%;
      padding: 10px;
      background: gold;
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login:hover {
      background: linear-gradient(135deg, #ff6600, #ffcc00);
      transform: scale(1.05);
    }

    .forget_password {
      display: block;
      text-align: start;

      margin-top: 15px;
      font-size: 17px;
      padding-left: 20px;
      color: black;
      text-decoration: none;
    }

    .forget_password:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Admin Login</h2>
    <form action="php/sesstion2.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" class="login" name="btn">Login</button>
      <a href="#" class="forget_password">Forget Password</a>

    </form>
  </div>
</body>

</html>