<?php
require('connect.php');
?>
<html>
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand"><i>TXP 2.0</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<center>
<div class="container"> 
<h3>Events</h3>
<ul class="list-group">
  <li class="list-group-item"><a href="view.php?cat=all" class="font-weight-bold">All Events</a></li>
  <li class="list-group-item"><a href="view.php?cat=lan" class="font-weight-bold">LAN Gaming</a></li>
  <li class="list-group-item"><a href="view.php?cat=dance" class="font-weight-bold">Dancing</a></li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item"><a href="view.php?cat=unpaid" class="font-weight-bold">Un-Paid</a></li>
</ul>
</div>
</center>
</body>
</html>
