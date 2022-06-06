
<?php
if(count($_POST)>0) {
    $conn = mysqli_connect("localhost","root","","patientinfo");
    $result = mysqli_query($conn,"SELECT * FROM details WHERE name='" . $_POST["name"] . "' and phone = '". $_POST["phone"]."' and email='" . $_POST["email"] . "'" );
    $count  = mysqli_num_rows($result);
    if($count==0) {
        header('location:invalid.html');        
    } else {
        echo"<script>alert('Login Successfull')</script>";
        $sql = "SELECT * FROM details WHERE  name='" . $_POST["name"] . "' and phone = '". $_POST["phone"]."' and email='" . $_POST["email"] . "'";
        $result = $conn->query($sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title> User Details</title>
    <link rel="stylesheet" href="css/bootstrap-3.4.1-dist/css/bootstrap.css">
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
           font-color:blue;
        }  
        td {
            border: 1px solid black;
        }  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }  
        td {
            font-weight: lighter;
        }
    </style>
</head>  
<body style="background-color:  #c2f0c2;">
    <div class="container-fluid" style="text-align:center;background-color:silver;">
    <h2 style="color:#002080">WELCOME <?php echo "".$_POST['name']."";?>!!!!!!</h2>
 </div>
    <div style="text-align:right;">
    <a href="home.html"><button class="btn btn-primary">GO TO HOME</button></a>
    <a href="u_login.html"><button class="btn btn-primary">LOGOUT</button></a>
    </div>
    <section>    	
        <h1 style="color:blue;" >YOUR History</h1>
        <table>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>TIME</th>
                <th>DATE</th>
            </tr>
                <?php  
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['tim'];?></td>
                <td><?php echo $rows['dat'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>  
</html>