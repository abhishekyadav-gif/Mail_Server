<?php
include('config.php');
session_start();

if (isset($_POST['btn'])) {
  $id = "";
  $Email = $_POST['email'];
  $Subject = $_POST['subject'];
  $Message = $_POST['message'];
  $Attach_file = $_FILES['file']['name'];
  // $Attach_file = addslashes(file_get_contents($image));

  echo "ok " . $Attach_file;
  $Date = date('d/m/y');


  $sql = "INSERT INTO emails VALUE('$Email','$id','$Subject','$Message','$Attach_file','$Date')";
  $data = $conn->prepare($sql);
  $result = $data->execute();
  if ($result) {
    echo "<script> alert('Email Sent sucessfully') </script>";
    echo "<script>window.location.href = '../../user/composemain.php';</script>";
  } else {
    echo "<script> alert('somthing went wrong try again') </script>";
    echo "<script>window.location.href = '../../user/composemain.php';</script>";

  }

}

?>