<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="pharmacy_management";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $NAME = $_POST['NAME'];
	 $ADDRESS = $_POST['ADDRESS'];
	 $PHONE = $_POST['PHONE'];

	 $sql_query = "INSERT INTO company (NAME,ADDRESS,PHONE)
	 VALUES ('$NAME','$ADDRESS','$PHONE')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>