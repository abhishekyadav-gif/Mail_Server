<?php
include('config.php');

// Fetch Data
$sql = "SELECT id, Name, Email, Contact, Message, Date FROM feedback";
$data = $conn->prepare($sql);
$data->execute();
$userdata = $data->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Table</title>
  <style>
    body {
      background-color: #fdfbd4;
      color: black;
    }

    .table-container {

      max-width: 800px;
      margin: auto;
      border-radius: 8px;
      padding: 10px;
      background: rgba(255, 255, 255, 0.1);
      color: black;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 8px;
    }

    th,
    td {
      font-weight: 500;
      padding: 12px;
      text-align: center;
      border: 1px solid rgba(79, 76, 76, 0.3);
    }

    th {
      background: #ff6600;
      color: black;
    }

    td {
      background: rgba(255, 255, 255, 0.1);
      color: black;
    }

    td:hover {
      background: rgba(97, 95, 95, 0.2);
    }

    /* Delete Button */
    .delete-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .delete-btn:hover {
      background-color: darkred;
    }
  </style>
</head>

<body>

  <div class="table-container">
    <h2>User Feedback</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Feedback</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($userdata as $row): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['Name']); ?></td>
            <td><?php echo htmlspecialchars($row['Email']); ?></td>
            <td><?php echo htmlspecialchars($row['Contact']); ?></td>
            <td><?php echo htmlspecialchars($row['Message']); ?></td>
            <td><?php echo htmlspecialchars($row['Date']); ?></td>

            <td>
              <form action="php/delete_feedback.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="delete-btn">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>