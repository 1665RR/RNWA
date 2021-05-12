<?php 
$conn = mysqli_connect("localhost", "root", "", "cms") or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_GET['id'])) {	
	$id = $_GET['id']; 
	$sql_query = "select name, address, phone, email, rate from contractor where users_id = $id";
	$response = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));	
	$rows = array();
	while($r = mysqli_fetch_assoc($response)) {
    $rows[] = $r;
	}
	print json_encode($rows);	
}
?>