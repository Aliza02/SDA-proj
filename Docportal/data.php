<?php
$servername="localhost";
$username="root";
$password="";
$databasename="muetdoc";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());

}

if(isset($_POST['save']))
{
	$first_name=$_POST['First_Name'];
	$father_name=$_POST['Father_Name'];
	$roll_no=$_POST['Roll_no'];
	$email=$_POST['Email'];
	$phone=$_POST['Phone'];
	$batch=$_POST['Batch'];
	$programm=$_POST['program'];
	$paymentt=$_POST['payment'];
	$dept=$_POST['Department'];
	$challan=$_POST['pay'];
	$documentt=$_POST['document'];

	$sql_query="INSERT INTO std VALUES('$first_name','$father_name','$roll_no','$email','$phone','$batch','$dept','$programm','$documentt','$challan','$paymentt')";
	if(mysqli_query($conn,$sql_query))
	{
		
		echo '<a href="last.html"><input type="submit" value="PDF Download" style="margin-left:500px; background-color:#ff7236; border:none; width:500px; height:50px; font-size:20px; color:white"></a>';

	}
	else
	{

		echo "Error:" . $sql."" . mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>