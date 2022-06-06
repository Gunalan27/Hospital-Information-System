<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "patientinfo") or die("Connection Error: " . mysqli_error($conn));
$_SESSION["name"] =$_POST['name'];
$_SESSION["phone"] =$_POST['phone'];
$_SESSION["dat"] =$_POST['dat'];
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from details WHERE name='" . $_SESSION["name"] . "' and phone='" . $_SESSION["phone"] . "' and dat='" . $_SESSION["dat"] . "'");
    $row = mysqli_fetch_array($result);
            mysqli_query($conn, "DELETE  from details WHERE name='" . $_SESSION["name"] . "' and phone='" . $_SESSION["phone"] . "' and dat='" . $_SESSION["dat"] . "'");
        echo "<script>alert('Appointment Cancelled')</script>";  
    } 
?>
<html>
    <body style="text-align:center;">
        <h1>GO TO HOME</h1>
    <a href="home.html"> 
        <img src="images/home.jpg" style="height:3cm;width: 5cm;" alt=""></a>
</body>
</html>