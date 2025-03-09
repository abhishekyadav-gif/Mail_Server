<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Composition Box with Icons</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {

      background-color: #fdfbd4;
      margin: 0;

    }

    form {
      justify-content: center;
      align-items: center;
    }

    .email-box {
      background-color: rgb(242, 241, 217);
      margin: 2rem;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;

    }

    .email-box h2 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      color: #333;
    }

    /* Form styling */
    .email-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .email-form .input-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .email-form .input-group i {
      color: black;
      font-size: 1.2rem;
    }

    .email-form input,
    .email-form textarea {
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 0.9rem;
      outline: none;
      width: 100%;
    }

    .email-form input:focus,
    .email-form textarea:focus {
      border-color: black;
    }

    .email-form textarea {
      resize: vertical;
      min-height: 150px;
    }

    .email-form button {
      padding: 0.75rem 1.5rem;
      background-color: rgba(244, 229, 131, 0.88);

      color: brown;
      border: none;
      border-radius: 5px;
      font-size: 0.9rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      align-self: flex-end;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .file-upload {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .file-upload input[type="file"] {
      display: none;
    }

    .file-upload label {
      font-size: 1.3rem;
      margin-left: 10px;
      cursor: pointer;
    }

    .email-form button:hover {
      background-color: rgba(215, 200, 100, 0.88);
    }

    .data {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }

    .data h3 {
      padding-left: 15rem;

    }
  </style>
</head>

<body>
  <form action="php/Email.php" method="post" enctype="multipart/form-data">
    <div class="email-box">
      <div class="data">
        <h2>Compose Email</h2>
        <div class="file-upload">
          <label for="file-input">
            <i class="fas fa-file"></i> Attach File
          </label>
          <input type="file" id="file-input" name="file" />
        </div>
      </div>

      <div class="email-form">
        <!-- Recipient Email Field -->
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="To: Recipient's email" required name="email">
        </div>

        <!-- Subject Field -->
        <div class="input-group">
          <i class="fas fa-tag"></i>
          <input type="text" placeholder="Subject" required name="subject">
        </div>

        <!-- Message Box -->
        <div class="input-group">
          <i class="fas fa-pen"></i>
          <textarea placeholder="Write your message here..." required name="message"></textarea>
        </div>

        <!-- Send Button -->
        <button type="submit" name="btn">
          <i class="fas fa-paper-plane"></i>
          Send
        </button>
      </div>
    </div>
  </form>
</body>

</html>