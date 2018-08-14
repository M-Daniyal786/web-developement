<?php

if(isset($_POST['submit'])){
  $name = $_POST['Name'];
  $subject = $_POST['Subject'];
  $emailFrom = $_POST['Email'];
  $message = $_POST['Message'];

  $mailTo = "daniyalwasi91@yahoo.com"
  $headers = "From: ".$emailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contactus.html");
}
 ?>
