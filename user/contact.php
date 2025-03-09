<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Mail Server Project</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #fdfbd4;

    }

    .container {

      width: 30%;
      max-width: 800px;
      margin: 50px auto;
      background: rgb(238, 235, 186);
      padding: 20px;
      border-radius: 8px;
      /* box-shadow: 0 0 15px rgba(4, 4, 4, 0.1); */
      text-align: center;
    }

    .data {}


    h2 {
      color: #333;
      font-weight: 500;
      font-size: 2rem;
    }

    p {
      font-size: 1.5rem;
      font-weight: 500;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    .contact-form label {
      font-weight: bold;
      font-size: 1.5rem;
      margin-top: 10px;
      padding-left: 1rem;
    }

    .contact-form input,
    .contact-form textarea {
      width: 90%;
      padding: 15px;
      margin-top: 5px;
      border: none;
      border-radius: 5px;
    }

    .contact-form button {
      background: gold;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      margin-top: 15px;
      cursor: pointer;
      color: black;
      transition: transform 0.3s ease-in-out;

      &:hover {
        background: linear-gradient(135deg, #ff6600, #ffcc00);
        transform: scale(1.05);



      }
    }

    .social_icons {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      padding-left: 20rem;
      color: black;
      margin-top: 5rem;
    }

    .social_icons a {
      text-decoration: none;
      color: black;
      margin: 10px 0;
      transition: color 0.3s;
      font-size: 2rem;
      padding: 1rem;

    }

    .social_icons a:hover {
      background-color: rgba(241, 223, 109, 0.88);
      /* font-size: 2rem; */
      padding: 1rem;
      border-radius: 0.7rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- <div class="data"> -->

    <h2>Contact Us</h2>
    <p>If you have any questions, feel free to reach out to us.</p>

    <form action="php/contact.php" method="post" class="contact-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required placeholder="Enter Full Name">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required placeholder="Enter Email">

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required placeholder="Your Message"></textarea>

      <button type="submit">Send Message</button>
    </form>
    <!-- </div> -->

    <div class="social_icons">
      <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
      <a href="https://x.com/Abhiyad93198676" class="icon"><i class="fab fa-twitter"></i></a>
      <a href="https://linkedin.com/in/abhishekyadav8080" class="icon"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://github.com/abhishekyadav-gif" class="icon"><i class="fab fa-github"></i></a>
    </div>


  </div>
</body>

</html>