<?php
include('config.php');


if (isset($_POST['fname'])) {
  $Fname = $_POST['fname'];
  $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Department = $_POST['department'];
  $Password = $_POST['password'];
  $Date = date('d/m/y');
  $id = "";


  $data = $conn->prepare("INSERT INTO admin_regist VALUES ('$Fname','$Lname','$Email','$Department','$Password','$Date','$id')");
  $result = $data->execute();
  if ($result) {
    echo "<script>alert('Register Sucessfull Plz Login')</script>";
    echo "<script>window.location.href = '../../admin/index.php';</script>";

  } else {
    echo "<script>alert('PLz Register')</script>";
    echo "<script>window.location.href = '../../admin/registermain.php';</script>";


  }



}



?>