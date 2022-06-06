<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="container">
         <div class="card">
             <div class="card-body">
                 <div class="col-md-6">
                     <form action="" method="POST">
                         <div class="form-group">
                            <label for="mob">Phone number:</label>
                            <input type="text" class="form-control" id="phone" name="phone"> 
                         </div>
                         <button class="btn-btn-success" type="submit" name="sendotp">SEND OTP</button>
                     </form>

                 </div>

             </div>

         </div>

     </div>
</body>
</html>
<?php

$authkey="";
$senderId="";
if(isset($_POST['sendotp']))
{
    $mobileNumber=$_POST['phone'];
    $message="WELCOME!!     from   UCET.......";   
    $postData=array(
        'authkey' =>$authkey,
         'mobiles' =>$mobileNumber,
         'message'=>$message,
         'sender'=>$senderId,
         'route'=>$route
        );

}





?>