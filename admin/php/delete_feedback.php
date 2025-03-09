<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM feedback WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  if ($stmt->execute()) {
    echo "<script>alert('Feedback deleted successfully'); window.location.href=document.referrer;</script>";
  } else {
    echo "<script>alert('Error deleting feedback'); window.location.href=document.referrer;</script>";
  }
}
?>