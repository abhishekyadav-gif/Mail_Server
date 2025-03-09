<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #fdfbd4;

    }

    .feedback-container {
      background-color: #fdfbd4;
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      backdrop-filter: blur(10px);
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }

    .feedback-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-control {
      background: transparent;
      /* border: 1px solid rgba(36, 34, 34, 0.3); */
      border: 1px solid black;
      color: white;
    }

    .form-control:focus {
      border-color: #ffcc00;
      box-shadow: 0 0 10px #ffcc00;
    }

    .btn-submit {
      width: 100%;
      /* background: linear-gradient(135deg, #ffcc00, #ff6600); */
      background-color: rgba(244, 229, 131, 0.88);
      border: none;
      color: black;
      font-weight: 500;
      padding: 10px;
      border-radius: 8px;
      transition: 0.3s;
    }

    .btn-submit:hover {
      background: linear-gradient(135deg, #ff6600, #ffcc00);
      transform: scale(1.05);
    }
  </style>
</head>

<body>

  <div class="feedback-container">
    <h2>We Value Your Feedback</h2>
    <form action="php/feedback.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Contact</label>
        <input type="number" class="form-control" name="phone" placeholder="Enter your Contact Number" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Your Feedback</label>
        <textarea class="form-control" name="message" rows="4" placeholder="Write your feedback..." required></textarea>
      </div>
      <button type="submit" class="btn-submit" name="btn">Submit Feedback</button>
    </form>
  </div>

</body>

</html>