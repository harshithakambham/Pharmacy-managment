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
	 $TYPE = $_POST['TYPE'];
	 $BARCODE = $_POST['BARCODE'];
	 $DOSE = $_POST['DOSE'];
	 $CODE = $_POST['CODE'];
	 $COST_PRICE = $_POST['COST_PRICE'];
	 $SELLING_PRICE = $_POST['SELLING_PRICE'];
	 $EXPIRY = $_POST['EXPIRY'];
	 $COMPANY_NAME = $_POST['COMPANY_NAME'];
	 $PRODUCTION_DATE = $_POST['PRODUCTION_DATE'];
	 $EXPIRATION_DATE = $_POST['EXPIRATION_DATE'];
	 $PLACE = $_POST['PLACE'];
	 $QUANTITY = $_POST['QUANTITY'];

	 $sql_query = "INSERT INTO drugs (NAME,TYPE,BARCODE,DOSE,CODE,COST_PRICE,SELLING_PRICE,EXPIRY,COMPANY_NAME,PRODUCTION_DATE,EXPIRATION_DATE,PLACE,QUANTITY)
	 VALUES ('$NAME','$TYPE','$BARCODE','$DOSE','$CODE','$COST_PRICE','$SELLING_PRICE','$EXPIRY','$COMPANY_NAME','$PRODUCTION_DATE','$EXPIRATION_DATE','$PLACE','$QUANTITY')";

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