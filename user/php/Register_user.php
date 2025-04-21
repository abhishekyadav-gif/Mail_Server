<?php
include('config.php');


if (isset($_POST['fname'])) {
  $Fname = $_POST['fname'];
  $id = "";
  $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  $R_date = date('d/m/y');


  $data = $conn->prepare("INSERT INTO user_register VALUES ('$Fname','$id','$Lname','$id','$Email','$Password','$R_date')");
  $result = $data->execute();
  if ($result) {
    echo "<script>alert('Register Sucessfull Plz Login')</script>";
    echo "<script>window.location.href = '../../user/index.php';</script>";

  } else {
    echo "<script>alert('PLz Register')</script>";
    echo "<script>window.location.href = '../../user/registermain.php';</script>";


  }



}



?>