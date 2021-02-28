<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "my_form";
	$conn = mysqli_connect($server, $user, $pass, $database);
	if(mysqli_connect_error())
	{
		echo "<p>OOppss..some error are occurring...kindly try again later...exiting...</p>";
		exit();
	}
?>
<html>
<head>
	<title>PHP and MySQLi Delete Record from Table Example</title>
</head>
<body>
<?php
	$Barcode = $_GET['Barcode'];
	$sqlQry = "delete from my_form.table where Barcode='$Barcode'";
	$res = $conn->query($sqlQry);
	if($res)
	{
		echo "<p>Record with Barcode = $Barcode, is deleted successfully.</p>";
	}
	else 
	{
		echo "<p>Error in deleting the record..exiting...</p>";
		exit();
	}
?>
</body>
</html>