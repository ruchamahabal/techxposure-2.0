<?php
  include 'db_conn.php';
  extract($_POST);
  $sql = "select email from participants where email = '".$email."'";
  $query = mysqli_query($conn, $sql);
  if(mysqli_num_rows($query)==0)
  {
      $sql = "insert into participants values('".$Name."','".$collegeName."','".$email."',".$phone.");";
      $success = mysqli_query($conn,$sql);
      if (!$success) {
            die("Couldn't enter data: ".mysqli_error($conn));
      }
  }
  foreach($TeamEvents as $event){
     $sql = "insert into team_registrations values('".$email."','".$event."',".$numberOfMembers.");";
     $success = mysqli_query($conn, $sql);
     if(!$success){
       die("Couldn't enter data: ".mysqli_error($conn));
     }
  }
 ?>