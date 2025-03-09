<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <style>
    body {
      background-color: #fdfbd4;

    }

    .container {
      background: rgb(238, 235, 186);
      margin: 3rem;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
      text-align: center;
      width: 90%;
      max-width: 400px;
    }

    .stars {
      display: flex;
      justify-content: center;
      gap: 10px;
      font-size: 24px;
      cursor: pointer;
      visibility: hidden;
    }

    .stars span {
      transition: color 0.3s;
    }

    .stars span:hover,
    .stars span.active {
      color: gold;
    }

    input {
      width: 80%;
      margin: 10px;
      padding: 15px;
      border-radius: 5px;
      border: none;
    }


    textarea {
      width: 80%;
      margin: 10px;
      padding: 25px;
      border-radius: 5px;
      border: none;
      /* background: #333; */
      color: black;
      resize: none;
    }

    button {
      background: gold;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      margin-top: 3rem;
    }

    button:hover {
      background: orange;
    }
  </style>
</head>

<body>
  <form action="php/feedback.php" method="post">
    <div class="container">
      <h2>Give Your Feedback</h2>
      <input type="text" placeholder="Your Name" required name="name">
      <input type="email" placeholder="Your Email" required name="email">
      <input type="tel" placeholder="Your Contact Number" required name="phone">
      <textarea placeholder="Write your feedback..." name="message"></textarea>
      <button onclick="" name="btn">Submit</button>
    </div>
  </form>
</body>

</html>