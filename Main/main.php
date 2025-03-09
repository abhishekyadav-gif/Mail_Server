<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail Server</title>
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #fdfbd4;
      display: flex;
    }

    .content {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 2rem;
    }

    .content img {
      height: 400px;
      margin-right: 20px;
      margin-left: 1rem;
      border-radius: 1rem;
      width: 70%;
    }

    .intro {
      padding-left: 3rem;
      margin-left: 7rem;
    }

    .text h2 {
      font-size: 6rem;
      font-weight: 500;
      width: 80%;

    }

    .text button {
      /* background-color: rgba(221, 220, 214, 0.9);
       */
      background-color: rgba(244, 229, 131, 0.88);


      padding: 1.3rem;
      border: none;
      border-radius: 5px;
      font-size: 1.3rem;
      font-weight: 500;
      cursor: pointer;
      color: black;

      &:hover {
        background-color: rgba(212, 209, 172, 0.9);
        /* color:l; */

      }

    }

    .text span {
      color: red;
      font: unset;
    }
  </style>
</head>

<body>

  <div class="content">
    <img src="imag/main3.png" alt=" Image">
    <div class="intro">
      <div class="text">

        <h2>Welcome to <span>Mail_Server </span> System</h2>
        <a href="registermain.php"> <button>Register Now</button></a>


      </div>
    </div>
  </div>

</body>

</html>