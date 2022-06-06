<?php
$servername="localhost";
$username="root";
$password="";
$database_name="patientinfo";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn)
{
	die("connection failed:"  . mysqli_connect_error());
	
}
if (isset($_POST['submit'])) 
{
	
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age']
    $email=$_POST['email']
    $phone=$_POST['phone'];
    $doctor=$_POST['doctor'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    $sql_query="INSERT INTO details(name,gender,age,email,phone,doctor,date,time)VALUES ('$name','$age','$gender','$email','$phone','$doctor','$date','$time')";
    if (mysqli_query($patientdetails,$sql_query)) 
    {
    
    	echo "successful  successful";
    }else
    {
    	echo "Errror:";
    }
    mysqli_close($conn); 
}
?>