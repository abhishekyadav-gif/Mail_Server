<?php
include('config.php');


if (isset($_POST['fname'])) {
  $First_Name = $_POST['fname'];
  $Last_Name = $_POST['lname'];
  $Email = $_POST['email'];
  $Department = $_POST['department'];
  $Password = $_POST['password'];
  $Date = date('d/m/y');
  $Role = "";


  $data = $conn->prepare("INSERT INTO admin_regist VALUES ('$First_Name','$Last_Name','$Email','$Department','$Password','$Date','$Role')");
  $result = $data->execute();
  if ($result) {
    echo "<script>alert('Register Sucess Plz Login')</script>";
  } else {
    echo "<script>alert('PLz Register')</script>";

  }



}



?>