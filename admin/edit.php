<?php
require('connect.php');
if(isset($_POST['id'])){
    $uid = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $team = $_POST['team'];
    $event = $_POST['event'];
    $payment = $_POST['payment'];
    $cat = $_POST['cat'];
    $query = $conn->prepare("UPDATE `event_participants` SET `name`= ? , `contact`= ? , `email` = ? , `college` = ? , `team_members` = ? , `event` = ? , `payment` = ? WHERE `uid`=?");
	$query->bind_param("sissssis", $name , $contact , $email , $college , $team , $event , $payment , $uid);
    $query->execute();
    if($query) {
        header('Location: view.php?cat='.$cat);
    }
    else {
        echo "Something Went Wrong";
    }
}
?>
