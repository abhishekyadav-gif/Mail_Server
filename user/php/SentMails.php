<?php
include('config.php');
$sql = "SELECT * FROM emails";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Inbox</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background-color: #fdfbd4;
      align-items: center;
    }

    .email-container {
      max-width: 600px;
      width: 100%;
    }

    /* Email Preview */
    .email-preview {
      background: #fff;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background 0.3s ease;
    }

    .email-preview:hover {
      background: #f0f0f0;
    }

    .email-preview i {
      color: #007bff;
      font-size: 1.2rem;
    }

    /* Full Email View */
    .email-box {
      display: none;
      background: rgb(242, 241, 217);
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      position: relative;
      margin-top: 10px;
    }

    .close-btn {
      cursor: pointer;
      color: red;
      font-size: 22px;
      font-weight: bold;
      position: absolute;
      top: 10px;
      right: 15px;
    }

    .email-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .email-form .input-group {
      display: flex;
      align-items: center;
      gap: 10px;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 8px;
      background: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .email-form .input-group i {
      color: #333;
      font-size: 1.2rem;
    }

    .email-form input,
    .email-form textarea {
      flex: 1;
      padding: 10px;
      border: none;
      font-size: 1rem;
      outline: none;
      width: 100%;
      background: transparent;
    }

    .email-form textarea {
      resize: vertical;
      min-height: 120px;
    }

    .reply {
      display: flex;
      align-items: center;
      border: 1px solid #ddd;
      border-radius: 25px;
      padding: 10px 15px;
      width: 100%;
      max-width: 400px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 10px;
    }

    .reply input {
      flex: 1;
      border: none;
      outline: none;
      padding: 10px;
      font-size: 1rem;
      background: transparent;
    }

    .reply i {
      color: #007bff;
      font-size: 1.2rem;
      cursor: pointer;
      transition: color 0.3s ease-in-out;
    }

    .reply i:hover {
      color: #0056b3;
    }
  </style>
</head>

<body>

  <div class="email-container">
    <h2>Sent Mails</h2>
    <?php if (!empty($result)): ?>
      <?php foreach ($result as $row): ?>
        <!-- Email Preview -->
        <div class="email-preview" onclick="openEmail(<?php echo $row['id']; ?>)">
          <span>
            <i class="fas fa-envelope"></i>
            <?php echo htmlspecialchars($row['Subject']); ?>
          </span>
          <span>
            <i class="fas fa-calendar-alt"></i>
            <?php echo htmlspecialchars($row['Date']); ?>
          </span>
        </div>

        <!-- Full Email View (Initially Hidden) -->
        <div class="email-box" id="email-<?php echo $row['id']; ?>">
          <span class="close-btn" onclick="closeEmail(<?php echo $row['id']; ?>)">&times;</span>
          <h3>Sent Mail</h3>
          <p><strong>Date:</strong> <?php echo htmlspecialchars($row['Date']); ?></p>
          <p><strong>To:</strong> <?php echo htmlspecialchars($row['Receiver_mail']); ?></p>

          <div class="email-form">
            <!-- Subject -->
            <div class="input-group">
              <i class="fas fa-tag"></i>
              <input type="text" value="<?php echo htmlspecialchars($row['Subject']); ?>" readonly>
            </div>

            <!-- Message -->
            <div class="input-group">
              <i class="fas fa-pen"></i>
              <textarea readonly><?php echo htmlspecialchars($row['Message']); ?></textarea>
            </div>

            <!-- Reply Box -->
            <div class="reply">
              <input type="text" placeholder="Reply">
              <i class="fa fa-reply"></i>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No emails found.</p>
    <?php endif; ?>
  </div>

  <script>
    function openEmail(id) {
      // Pehle sare emails hide kar do
      document.querySelectorAll(".email-box").forEach(box => {
        box.style.display = "none";
      });

      // Sirf selected email show karo
      document.getElementById("email-" + id).style.display = "block";
    }

    function closeEmail(id) {
      document.getElementById("email-" + id).style.display = "none";
    }
  </script>

</body>

</html>