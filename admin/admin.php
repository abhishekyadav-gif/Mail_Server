<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <style>
    .container {
      background: white;
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

    .btn {
      width: 100%;
      padding: 10px;
      background-color: rgb(233, 229, 165);
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Admin Login</h2>
    <form action="php/adminlog.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>

</html>