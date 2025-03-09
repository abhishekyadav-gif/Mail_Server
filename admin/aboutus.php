<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Mail Server Project</title>
  <style>
    body {
      background-color: #fdfbd4;
      margin: 0;
      padding: 0;
    }

    .containere {
      max-width: 900px;

      margin: 50px auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .info {
      text-align: center;
      margin-bottom: 20px;

    }

    .info h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .info p {
      color: #555;
      line-height: 1.6;
    }

    .cards {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .card {
      /* background: #007bff; */
      background-color: rgb(220, 216, 153);

      color: black;
      padding: 20px;
      border-radius: 8px;
      width: 40%;
      min-width: 250px;
      text-align: center;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .card h4 {
      margin-bottom: 10px;
      text-transform: uppercase;
      font-size: 18px;
      border-bottom: 2px solid white;
      padding-bottom: 5px;
    }

    .card ul {
      list-style-type: none;
      padding: 0;
    }

    .card ul li {
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    }

    .card ul li:last-child {
      border-bottom: none;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="info">
      <h2>About Mail Server Project</h2>
      <p>
        The Mail Server Project is a fully functional email server that allows users to send, receive, and manage emails
        efficiently. It is built using PHP, MySQL, and AJAX, ensuring fast and smooth communication between clients and
        servers.
      </p>
    </div>
    <div class="cards">
      <div class="card">
        <h4>* Key Features *</h4>
        <ul>
          <li>Secure User Authentication</li>
          <li>Inbox and Sent Mail Management</li>
          <li>Attachment Support</li>
          <!-- <li>Real-time Notifications</li> -->
          <li>AJAX-based Message Loading</li>
        </ul>
      </div>

      <div class="card">
        <h4>* Technologies Used *</h4>
        <ul>
          <li>PHP (Backend Logic)</li>
          <li>MySQL (Database Management)</li>
          <li>HTML, CSS (Frontend UI)</li>
          <li>AJAX (Asynchronous Data Processing)</li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>