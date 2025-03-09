<?php
include('config.php');


if (isset($_POST['name'])) {
  $Name = $_POST['name'];
  $id = "";
  $Email = $_POST['email'];
  $Contact = $_POST['phone'];
  $Message = $_POST['message'];
  $Date = date('d/m/y');

  $sql = "INSERT INTO feedback VALUES ('$Name','$id','$Email','$Contact','$Message','$Date')";
  $data = $conn->prepare($sql);
  $result = $data->execute();


  if ($result) {
    echo "<script>alert('Thank You for Your Feedback')</script>";
    echo "<script>window.location.href = '../../main/feedbackmain.php';</script>";

  } else {
    echo "<script>alert('Something Went wrong')</script>";


  }

}


?>