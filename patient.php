<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap-3.4.1-dist/css/bootstrap.css">
<style>    
    table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
       th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center; 
        } 
</style>
</head>
<body style="background-color:yellow;">
    <h2 style="text-align:center;color:blue"> OVERALL PATIENT DETAILS</h2>
    <hr style="height:30px;background-color:rgb(21, 127, 127)">
    <div style="text-align:right;">
    <a href="home.html"><button class="btn btn-primary">GO TO HOME</button></a>
    <a href="admin.html"><button class="btn btn-primary">LOGOUT</button></a>
    </div>
    <br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientinfo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,age,gender,email,doctor,phone,dat,tim FROM details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>NAME</th><th>AGE</th><th>GENDER</th><th>EMAIL</th><th>DOCTOR</th><th>PHONE</th><th>DATE</th><th>TIME</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["doctor"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["dat"]. "</td><td> " . $row["tim"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
