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
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doctor=$_POST['doctor'];
    $dat=$_POST['dat'];
    $tim=$_POST['tim'];
    $sql_query="INSERT INTO details(name,gender,age,email,phone,doctor,dat,tim)VALUES ('$name','$gender','$age','$email','$phone','$doctor','$dat','$tim')";
    if (mysqli_query($conn,$sql_query)) 
    {    
    header("location:success.html");       
    }
  else
    {
    	echo "<scrit>alert(Some error Occurs ....try again later')";
        header("location:home.html");
    }
    mysqli_close($conn); 
}
?>