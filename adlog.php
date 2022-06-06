
<?php
if(count($_POST)>0) {
    $conn = mysqli_connect("localhost","root","","patientinfo");
    $result = mysqli_query($conn,"SELECT * FROM admin WHERE admin='" . $_POST["admin"] . "' and password = '". $_POST["password"]."' " );
    $count  = mysqli_num_rows($result);
    if($count==0) {
        header('location:invalid.html');   
    } else {
        echo"<script>alert('Login Successfull')</script>";
        header("location:admin.html");
    }
}
?>