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
$sql = "SELECT * FROM details WHERE  doctor='Aarthy'";
$result = $conn->query($sql);
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
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
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
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
  
<body>
    <section>
    	 <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
    	<h2>WELCOME <?php echo $rows['doctor'];?></h2>
        <h1>YOUR PATIENT DETAILS</h1>
        <!-- TABLE CONSTRUCTION-->
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
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
           
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
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