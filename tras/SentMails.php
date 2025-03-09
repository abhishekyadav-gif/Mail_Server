<?php
include('config.php');
session_start();

// Fetch all emails from the database
$sql = "SELECT * FROM emails ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sent Emails</title>
  <style>
    body {
      background-color: rgb(248, 245, 197);

    }

    .email-container {
      background-color: rgb(220, 216, 153);
      max-width: 800px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .email {
      border-bottom: 1px solid #ddd;
      padding: 15px;
      margin-bottom: 10px;
    }

    .email h3 {
      margin: 0;
      color: black;
    }

    .email p {
      margin: 5px 0;
      font-size: 1rem;
      color: black;
    }

    .email .date {
      font-size: 1rem;
      color: black;
    }

    .attachment {
      color: blue;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="email-container">
    <h2>📩 Sent Emails</h2>

    <?php while ($row = $result->fetch()) { ?>
      <div class="email">
        <h3>To: <?php echo htmlspecialchars($row['Subject']); ?></h3>
        <p><strong>Subject:</strong> <?php echo htmlspecialchars($row['Subject']); ?></p>
        <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($row['Message'])); ?></p>
        <p class="date">📅 Sent on: <?php echo $row['Date']; ?></p>

        <?php if (!empty($row['Attach_file'])) { ?>
          <p><strong>Attachment:</strong>
            <a href="<?php echo $row['Attach_file']; ?>" class="attachment">📎 View File</a>
          </p>
        <?php } ?>
      </div>
    <?php } ?>

  </div>

</body>

</html>