<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration</title>
  <style>
    .container {
      background: white;
      padding: 0.5rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 30%;

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
      width: 85%;
      padding: 10px;
      background-color: rgba(244, 229, 131, 0.88);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      color: black;
      margin-top: 2rem;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2> Registration</h2>
    <form action="php/admin_register.php" method="POST">
      <input type="text" name="fname" placeholder="First Name" required>
      <input type="text" name="lname" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="department" placeholder="Enter department" required>

      <input type="password" name="password" placeholder="Password" required>


      <button type="submit" class="btn" name="btn">Register</button>
    </form>
  </div>
</body>

</html>