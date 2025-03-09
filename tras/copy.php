<?php
include('config.php');

if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $sql = "SELECT * FROM emails WHERE Receiver_mail LIKE '%$search%'";
  $data = $conn->prepare($sql);
  $data->execute();
  $result = $data->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Inbox</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .email_item {
      border: 1px solid;
      display: flex;
      margin: 2rem;
      width: 40%;
      background-color: #fff;
      border-radius: 10px;
      cursor: pointer;
    }

    .icon {
      background-color: rgb(248, 245, 197);

      margin-right: 1rem;
      width: 10%;
      padding-right: 0.5rem;
      border: 1px solid;
      padding-left: 0.9rem;
      margin-left: 1rem;
      margin-top: 1.5rem;
      margin-right: 1.5rem;
      border-radius: 50%;
      height: 100%;
    }

    .icon span {
      font-size: 3rem;
      font-weight: 600;
      padding-left: 10px;
    }

    .content {
      margin-left: 1rem;
      font-size: 1.2rem;
      padding: 0;


    }

    .content h4 {
      font-weight: bold;

    }

    .date {
      margin-left: 1rem;

    }

    .date p {
      font-weight: 600;
      font-size: 1.5rem;
    }

    .date strong {
      font-size: 1.7rem;
      padding-top: 6rem;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php if (!empty($result)): ?>
      <?php foreach ($result as $row): ?>

        <div class="email_item">
          <div class="icon">
            <span id="avatar">A</span>
          </div>
          <div class="content">
            <h4><strong></strong> <?php echo htmlspecialchars($row['Receiver_mail']); ?></h4>
            <h5><strong></strong> <?php echo htmlspecialchars($row['Subject']); ?></h5>
            <p><strong></strong> <?php echo nl2br(htmlspecialchars($row['Message'])); ?></p>
          </div>
          <div class="date">
            <p> <?php echo $row['Date']; ?></p>
            <strong>✩</strong>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No emails found.</p>
  <?php endif; ?>
  </div>
</body>

</html>