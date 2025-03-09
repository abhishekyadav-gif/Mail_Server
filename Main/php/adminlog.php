<?php
include('config.php');

if (isset($_POST['email'])) {
  $Email = $_POST['email'];
  $Password = $_POST['password'];

  $data = $conn->prepare("SELECT *FROM admin_regist WHERE Email= '$Email' and Password='$Password'");
  $data->execute();
  if ($data->rowCount() > 0) {
    echo "<script> alert('Log in Sucessfully.') </script>";
  } else {
    echo "<script> alert('Plz Register !') </script>";
  }

}



?>