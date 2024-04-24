<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
if($conn === false){
	die("ERROR: Could not connect. "
	. mysqli_connect_error());
}
$nameuser = $_REQUEST['a'];
$username = $_REQUEST['b'];
$email = $_REQUEST['c'];
$passcode = $_REQUEST['d'];
$sql = "INSERT INTO ayushmithra VALUES ('$nameuser', 
	'$username','$email','$passcode')";
	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
mysqli_close($conn);
?>