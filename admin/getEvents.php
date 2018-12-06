<?php
include 'db_conn.php';
if(isset($_POST['eventName'])){
  fetchEvent($conn);
}
function fetchEvent($conn){
  $sql = 'select * from tech_events where title="'.$_POST['eventName'].'";';
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
  }
  // echo '<p><h4>'.$row['title'].'</h4></p> <p>'.$row['description'].'</p>';
  $response = json_encode($row);
  echo $response;
}
// if (!empty($_GET['id'])) {
//   // code...
//   $query = $conn->query("SELECT * FROM events WHERE id = {$_GET['id']}");
//
//     if($query->num_rows > 0){
//         $cmsData = $query->fetch_assoc();
//         echo '<h4>'.$cmsData['title'].'</h4>';
//         echo '<p>'.$cmsData['content'].'</p>';
//     }else{
//         echo 'Content not found....';
//     }
//
// }
// else{
//     echo 'Content not found....';
// }


?>
