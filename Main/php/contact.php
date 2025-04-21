<?php
include('config.php');

if (isset($_POST['name'])) {
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Message = $_POST['message'];
  $Date = date('d/m/y');
  $Id="";
  $data = $conn->prepare("INSERT INTO contact VALUES ('$Name','$Email','$Message','$Date','$Id')");
  $result = $data->execute();

  if ($result) {
    echo "<script>alert('Thank You for  Contact Us')</script>";
    echo "<script>window.location.href = '../../main/contactmain.php';</script>";

  } else {
    echo "<script>alert('Something Went wrong')</script>";

  }


}

?>