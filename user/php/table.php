<?php

session_start();
include('config.php');

if (!isset($_SESSION['email'])) {
  // header("Location: ../../main/adminmain.php");
  echo "<script> alert('Invalid User') </script>";
  echo "<script>window.location.href = '../../main/userlogmain.php';</script>";
  exit();
} else {
  $Email = $_SESSION['email'];

  $query = "SELECT Receiver_mail,Subject,Message,Date  FROM  emails";
  $stmt = $conn->prepare($query);
  $stmt->fetchAll();
  $result = $stmt->execute();

}
// print_r($result);
if ($stmt->rowCount() > 0) {

  echo "<style>
     body{
     margin:2rem;
      background-color: #fdfbd4;
      justify-content: center;
      margin-left: 2rem;
      
      
    
}
  table {

      background-color: #f2f2f2;
  
      width: 100%;
      border-collapse: collapse;
      padding: 18px;

      font-size: 18px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
    
  th, td {
      padding: 18px;
      border: 1px solid #ddd;
  }
  th {
      color: black;
  }
  tr:nth-child(even) {
  }
  tr:hover {
      background-color: #d1e7fd;
      transition: 0.3s ease-in-out;
  }
  h2 {
      text-align: center;
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
  }
</style>";

  echo "<h2>Sent Mail</h2>";

  echo "<table>
  <tr>
      <th>Receiver Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Date</th>
  </tr>";

  foreach ($stmt as $row) {
    echo "<tr>
      <td>" . htmlspecialchars($row['Receiver_mail']) . "</td>
      <td>" . htmlspecialchars($row['Subject']) . "</td>
      <td>" . htmlspecialchars($row['Message']) . "</td>
      <td>" . htmlspecialchars($row['Date']) . "</td>
    </tr>";
  }

  echo "</table>";


} else {
  echo "No sent emails found.";
}


?>