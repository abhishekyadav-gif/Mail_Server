<?php
include('config.php');

// Fetch Data
$sql = "SELECT id, Fname, Lname, Email, R_date FROM user_register"; // Ensure 'id' is selected
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

    .delete-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 6px 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .delete-btn:hover {
      background-color: darkred;
    }
  </style>
</head>

<body>

  <div class="table-container">
    <h2>User Data</h2>
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Registration Date</th>
          <th>Action</th> <!-- New column for delete button -->
        </tr>
      </thead>
      <tbody>
        <?php foreach ($userdata as $row): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['Fname']); ?></td>
            <td><?php echo htmlspecialchars($row['Lname']); ?></td>
            <td><?php echo htmlspecialchars($row['Email']); ?></td>
            <td><?php echo htmlspecialchars($row['R_date']); ?></td>
            <td>
              <form action="php/delete_user.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="delete-btn"
                  onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>