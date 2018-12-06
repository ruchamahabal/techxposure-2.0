<?php
require('connect.php');
if(isset($_POST['uid'])){
    $uid = $_POST['uid'];
    $cat = $_POST['cat'];
    $query = $conn->prepare("DELETE FROM `event_participants` WHERE `uid` = ?");
	$query->bind_param("s", $uid);
    $query->execute();
    if($query) {
        header('Location: view.php?cat='.$cat);
    }
    else {
        echo "Something Went Wrong";
    }
}
?>
