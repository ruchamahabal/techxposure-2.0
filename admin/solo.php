<?php
include 'db_conn.php';
extract($_POST);
$sql = "select email from participants where email = '" . $email . "'";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) == 0) {
  $sql = "insert into participants values('" . $Name . "','" . $collegeName . "','" . $email . "'," . $phone . ");";
  $success = mysqli_query($conn, $sql);
  if (!$success) {
    die("Couldn't enter data: " . mysqli_error($conn));
  }
}
print_r($SoloEvents);
foreach ($SoloEvents as $event) {
  $sql = "insert into solo_registrations values('" . $email . "','" . $event . "');";
  $success = mysqli_query($conn, $sql);
  if (!$success) {
    die("Couldn't enter data: " . mysqli_error($conn));
  }
}

// script for sending email
$mailFrom = "registrations@techxposure.org";
$message = $_POST['message'];
$mailTo = $email;
$subject = "Registration Successful";
$headers = "From: " . $mailFrom;

$events="";
foreach ($$SoloEvents as $eventStr){
  $events = $eventStr ."\n";
}
$txt = "You successfully registered for the following events \n" . $events;

mail($mailTo, $subject, $txt, $headers);
header("Location: ../register.php?RegistrationSuccessful");
exit();

?>
