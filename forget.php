<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "patientinfo") or die("Connection Error: " . mysqli_error($conn));
$_SESSION["username"] =$_POST['username'];
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from profile WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["confirmpassword"] == $_POST["newpassword"]) {
        mysqli_query($conn, "UPDATE profile set password='" . $_POST["newpassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
        echo "<script>alert('Password Changed')</script>";
        header("location:d_login.html");
    } else
        echo "<script>alert('Current Password is not correct')</script>"; 
}
?>