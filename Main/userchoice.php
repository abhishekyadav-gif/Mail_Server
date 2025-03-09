<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Type Selection</title>
  <style>
    body {}

    .container {
      
      /* background: rgb(238, 235, 186); */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding-right: 2rem;
      width: 60%;
    }

    h2 {
      margin-bottom: 20px;
    }

    button {
      margin-top: 2rem;
      padding: 1rem 2rem;
      color: #333;
      background: gold;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 500;
      margin-inline: 3rem;
      cursor: pointer;
      transition: all 0.3s ease-in-out;

      box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.2);
    }

    button:hover {
      opacity: 0.9;
      background: linear-gradient(135deg, #ff6600, #ffcc00);
      transform: scale(1.05);

      box-shadow: 2px 6px 12px rgba(0, 0, 0, 0.3);
    }

    button:active {
      transform: translateY(1px);
      box-shadow: 1px 3px 6px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Select Login Type</h2>
    <div class="button">
      <a href="adminmain.php" target="_blank"> <button>Login as Admin</button></a>
      <a href="userlogmain.php" target="_blank"><button>Login as User</button></a>
    </div>
  </div>
</body>

</html>