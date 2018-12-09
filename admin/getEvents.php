<?php
include 'db_conn.php';
if(isset($_POST['eventName'])){
  fetchEvent($conn);
}
function fetchEvent($conn){
    if($_POST['type']=="tech"){
      $sql = 'select * from tech_events where title="'.$_POST['eventName'].'";';
    }
    else if($_POST['type']=="fine_arts"){
      $sql = 'select * from fine_arts_events where title="'.$_POST['eventName'].'";';
    }
    else if($_POST['type']=='sub'){
      $sql = 'select * from sub_events where title="'.$_POST['eventName'].'";';
    }
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
      }
      $response = json_encode($row);
      echo $response;
}
?>
