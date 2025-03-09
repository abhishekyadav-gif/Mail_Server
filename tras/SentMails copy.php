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
  <title>Sent Mails</title>
  <style>
    body {
      background-color: #f8f5c5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      width: 60%;
    }

    .email_item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 15px;
      transition: transform 0.2s ease-in-out;
      cursor: pointer;
    }

    .email_item:hover {
      transform: translateY(-2px);
    }

    .content {
      flex: 1;
    }

    .content h4 {
      font-size: 1.1rem;
      font-weight: bold;
      color: #333;
    }

    .content h4 strong {
      color: #d35400;
      margin-right: 5px;
    }

    .content h5 {
      font-size: 1rem;
      color: #666;
      margin: 5px 0;
    }

    .content p {
      font-size: 0.9rem;
      color: #444;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      max-width: 90%;
    }

    .date {
      text-align: right;
      color: #666;
      font-size: 0.9rem;
    }

    .date strong {
      font-size: 1.5rem;
      color: #aaa;
      cursor: pointer;
      transition: color 0.2s ease-in-out;
    }

    .date strong:hover {
      color: gold;
    }

    a {
      text-decoration: none;
      outline: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php if (!empty($result)): ?>
      <?php foreach ($result as $row): ?>
        <a href="previewmain.php">
          <div class="email_item">
            <div class="content">
              <h4><strong>To:</strong> <?php echo htmlspecialchars($row['Receiver_mail']); ?></h4>
              <h5><?php echo htmlspecialchars($row['Subject']); ?></h5>
              <p><?php echo nl2br(htmlspecialchars($row['Message'])); ?></p>
            </div>
            <div class="date">
              <p><?php echo $row['Date']; ?></p>
              <strong>✩</strong>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No emails found.</p>
    <?php endif; ?>
  </div>
</body>

</html>