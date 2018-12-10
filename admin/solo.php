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

$events="";
foreach ($SoloEvents as $eventStr){
  $events = $eventStr ."\n";
}

// outgoing mail headers
$mailFromOut = "registrations@techxposure.org";
$mailToOut = $email;
$subjectOut = "Registration Successful";
$headersOut = "From: " . $mailFromOut;
$txtOut = "You successfully registered for the following events \n" . $events;

// incoming mail headers
$mailFromIn = $email;
$mailToIn = "registrations@techxposure.in";
$subjectIn = "New Registration";
$headersIn = "From: " . $mailFromIn;
$txtIn = $Name." registered for following events:".$events;


// outgoing mail
mail($mailToOut, $subjectOut, $txtOut, $headersOut);

// incoming mail
mail($mailToIn, $subjectIn, $txtIn, $headersIn);

header("Location: ../register.php?RegistrationSuccessful");
exit();

?>
