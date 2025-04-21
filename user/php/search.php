<?php
include('config.php');
if (isset($_POST['search'])) {
  $search = $_POST['search'];

  $sql = "SELECT * FROM emails WHERE Email LIKE '%$search%'";

  $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Inbox</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f4f4f4;
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

    .icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background-color: rgb(248, 245, 197);
      border-radius: 50%;
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
      margin-right: 15px;
    }

    .content {
      flex: 1;
    }

    .content h4 {
      font-size: 1.1rem;
      font-weight: bold;
      color: #333;
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
  </style>
</head>

<body>
  <div class="container">
    <?php if (!empty($result)): ?>
      <?php foreach ($result as $row): ?>
        <div class="email_item">
          <div class="icon">

            <?php
            $firstLetter = strtoupper(substr($search, 0, 1));
            ?>
            <span id="avatar"><?php echo $firstLetter; ?></span>


          </div>
          <div class="content">
            <h4><?php echo htmlspecialchars($row['Email']); ?></h4>
            <h5><?php echo htmlspecialchars($row['Subject']); ?></h5>
            <p><?php echo nl2br(htmlspecialchars($row['Message'])); ?></p>
          </div>
          <div class="date">
            <p><?php echo $row['Date']; ?></p>
            <strong>✩</strong>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No emails found.</p>
    <?php endif; ?>
  </div>
</body>

</html>