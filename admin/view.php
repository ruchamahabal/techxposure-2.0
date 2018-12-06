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
    <a href="dash.php" class="navbar-brand"><i>TXP 2.0</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="dash.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
<div class="table-responsive">
<?php
if(isset($_GET['cat'])){
$category = $_GET['cat'];
}
else{
    header('Location: dash.php');
}
if ($category == "all"){
    $query = $conn->prepare("SELECT * FROM `event_participants` ");
}
else if ($category == "lan"){
    $query = $conn->prepare("SELECT * FROM `event_participants` WHERE `event` = 'LAN GAMING' ");
}
else if ($category == "dance"){
    $query = $conn->prepare("SELECT * FROM `event_participants` WHERE `event` = 'DANCING' ");
}
else if ($category == "unpaid"){
    $query = $conn->prepare("SELECT * FROM `event_participants` WHERE `payment` = 0 ");
}
else {
    header('Location: dash.php');
}
$query->execute();
$r = $query->get_result();
echo('<table id="mytable" class="table table-hover"><thead id="tablehead"><tr ><th>ID</th><th>Name</th><th>Contact</th><th>Email</th><th>College</th><th>Team</th><th>Event</th><th>Payment</th><th>Edit</th></tr></thead><tbody>');
while ($assoc = $r->fetch_assoc()){
echo "<tr>";
echo "<td>".$assoc['uid']."</td>";
echo "<td>".$assoc['name']."</td>";
echo "<td>".$assoc['contact']."</td>";
echo "<td>".$assoc['email']."</td>";
echo "<td>".$assoc['college']."</td>";
echo "<td>".$assoc['team_members']."</td>";
echo "<td>".$assoc['event']."</td>";
if($assoc['payment'] == 1){
    echo "<td>Paid</td>";
}
else{
    echo "<td>Un-Paid</td>";
}
echo '<td><button type="button" class="btn" data-toggle="modal" data-target="#EditModal" data-uid="'.$assoc['uid'].'" data-name="'.$assoc['name'].'" data-contact="'.$assoc['contact'].'" data-email="'.$assoc['email'].'" data-college="'.$assoc['college'].'" data-team="'.$assoc['team_members'].'"data-event="'.$assoc['event'].'" data-payment="'.$assoc['payment'].'">&#x1f58a;</button></td>';
echo "</tr>";
}
?>
</tbody>
</table>
</div>
</div>
<!--EditModal-->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit.php" method="post">
          <div class="form-group">
            <label for="id" class="col-form-label">ID:</label>
            <input name="id"  class="form-control uid" readonly>
          </div>
		  <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input name="name" class="form-control name" required>
          </div>
          <div class="form-group">
            <label for="contact" class="col-form-label">Contact:</label>
            <input name="contact" class="form-control contact" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input name="email" class="form-control email" required>
          </div>
          <div class="form-group">
            <label for="college" class="col-form-label">College:</label>
            <input name="college" class="form-control college" required>
          </div>
          <div class="form-group">
            <label for="team" class="col-form-label">Team:</label>
            <input name="team" class="form-control team" >
          </div>
          <div>
        <label class="mr-sm-2" for="inlineFormCustomSelect">Event:</label>
        <select name="event" class="custom-select mr-sm-2 event" id="inlineFormCustomSelect">
        <option value="LAN Gaming">Lan Gaming</option>
        <option value="DANCING">Dancing</option>
        </select>
          </div>
          <div>
        <label class="mr-sm-2" for="inlineFormCustomSelect">Payment:</label>
        <select name="payment" class="custom-select mr-sm-2 payment" id="inlineFormCustomSelect">
        <option value=1>Paid</option>
        <option value=0>Un-Paid</option>
        </select>
          </div>
      </div>
      <div class="modal-footer">
      <input name="cat" value=<?php echo $category;?> class="form-control" style="display:none;">
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <form action="delete.php" method="post">
        <input name="uid"  class="form-control uuid" style="display:none;">
        <input name="cat" value=<?php echo $category;?> class="form-control" style="display:none;">
        <button type="submit" class="btn btn-danger" style="margin-top:23%;">Delete</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

<script>
$('#EditModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var uid = button.data('uid')
  var name = button.data('name')
  var contact = button.data('contact')
  var email = button.data('email')
  var college = button.data('college')
  var team = button.data('team')
  var event = button.data('event')
  var payment = button.data('payment')
  var modal = $(this)
  modal.find('.modal-body .uid').val(uid)
  modal.find('.modal-body .name').val(name)
  modal.find('.modal-body .contact').val(contact)
  modal.find('.modal-body .email').val(email)
  modal.find('.modal-body .college').val(college)
  modal.find('.modal-body .team').val(team)
  modal.find('.modal-body .event').val(event)
  modal.find('.modal-body .payment').val(payment)
  modal.find('.modal-footer .uuid').val(uid)
})
</script>
</body>
</html>
