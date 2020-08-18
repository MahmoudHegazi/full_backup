<?php 

 
global $con;
$getloged_id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id=" . $getloged_id;
$res = mysqli_query($con, $query);


while ($row = mysqli_fetch_assoc($res)) {
	 $uid = $row['id'];
	 $user = $row['name'];
	 $userimage = $row['image'];
}

// get total ticket created by loged in user 
$query = "SELECT COUNT(id) FROM maintenance WHERE creator_id=" . $uid;
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $ticket_count = $row['COUNT(id)'];
}


// get total users
$query = "SELECT COUNT(id) FROM users";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $total_users = $row['COUNT(id)'];
}

// get total tickets
$query = "SELECT COUNT(id) FROM maintenance";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $total_tickets = $row['COUNT(id)'];
}

// get total employees
$query = "SELECT COUNT(id) FROM employees";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $total_employees = $row['COUNT(id)'];
}

// get total devices
$query = "SELECT COUNT(id) FROM workstation";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $total_devices = $row['COUNT(id)'];
}


// get total messages
$query = "SELECT COUNT(id) FROM messages";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $total_message = $row['COUNT(id)'];
}


// get message recived by loged user 
$query = "SELECT COUNT(id) FROM messages WHERE reciver_id=" . $uid;
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

	 $messages_count = $row['COUNT(id)'];
}

// get Ticket precent
$get_tickets_dec = ($ticket_count / $total_tickets) * 100;
$ticket_precent = (int)$get_tickets_dec;


?>