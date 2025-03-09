<?php
include('config.php');
if (isset($_POST['email'])) {
  $Email = $_POST['email'];
  $Password = $_POST['password'];

  $data = $conn->prepare("select * from  user_register where Email='$Email' and Password='$Password'");

  // $data = $conn->prepare($sql);
  $result = $data->execute();

  if ($data->rowCount() > 0) {

    echo "<script> alert('Log in sucessfully') </script>";
    echo "<script>window.location.href = '../../user/index.php';</script>";
  } else {
    echo "<script> alert('Plz signup') </script>";
    echo "<script>window.location.href = '../../main/registermain.php';</script>";

  }

}
?>