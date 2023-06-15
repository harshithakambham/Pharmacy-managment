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
	 $PRODUCT_NAME = $_POST['PRODUCT_NAME'];
	 $PRODUCT_CODE = $_POST['PRODUCT_CODE'];
	 $DATE_OF_EXPIRY = $_POST['DATE_OF_EXPIRY'];
	 $QUANTITY_REMAIN = $_POST['QUANTITY_REMAIN'];
	

	 $sql_query = "INSERT INTO expiry (PRODUCT_NAME,PRODUCT_CODE,DATE_OF_EXPIRY,QUANTITY_REMAIN)
	 VALUES ('$PRODUCT_NAME','$PRODUCT_CODE','$DATE_OF_EXPIRY','$QUANTITY_REMAIN')";

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