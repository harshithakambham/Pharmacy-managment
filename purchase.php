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
	 $BARCODE = $_POST['BARCODE'];
	 $NAME = $_POST['NAME'];
	 $TYPE = $_POST['TYPE'];
	 $COMPANY_NAME = $_POST['COMPANY_NAME'];
	 $QUANTITY = $_POST['QUANTITY'];
	 $PRICE = $_POST['PRICE'];
	 $AMOUNT = $_POST['AMOUNT'];

	 $sql_query = "INSERT INTO purchase (BARCODE,NAME,TYPE,COMPANY_NAME,QUANTITY,PRICE,AMOUNT)
	 VALUES ('$BARCODE','$NAME','$TYPE','$COMPANY_NAME','$QUANTITY','$PRICE','$AMOUNT')";

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