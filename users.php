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
	 $ID = $_POST['ID'];
	 $NAME = $_POST['NAME'];
	 $DOB = $_POST['DOB'];
	 $ADDRESS = $_POST['ADDRESS'];
	 $PHONE = $_POST['PHONE'];
	 $SALARY = $_POST['SALARY'];
	 $PASSWORD = $_POST['PASSWORD'];

	 $sql_query = "INSERT INTO users (ID,NAME,ADDRESS,PHONE,SALARY,PASSWORD)
	 VALUES ('$ID','$NAME','$DOB','$ADDRESS','$PHONE','$SALARY','$PASSWORD')";

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