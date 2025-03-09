<?php
include('config.php');

if (isset($_POST['email'])) {
  $Email = $_POST['email'];
  $Password = $_POST['password'];

  $data = $conn->prepare("select * from admin_regist where Email='$Email' and Password='$Password'");

  // $data = $conn->prepare($sql);
  $result = $data->execute();

  if ($data->rowCount() > 0) {

    echo "<script> alert('Log in sucessfully') </script>";
    echo "<script>window.location.href = '../../admin/index.php';</script>";
    // $login = true;
    session_start();
    // $_SESSION['login']=true;
    $_SESSION['email'] = $Email;



  } else {
    echo "<script> alert('Plz signup') </script>";
    echo "<script>window.location.href = '../../admin/registermain.php';</script>";

  }

}




?>