<?php 
include 'connect.php';

$usersor=$db->prepare("SELECT * FROM ayar where ayar_id=:id
  ");
$usersor->execute(array(
'id'=>0
));


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <h2>Admin Panel</h2>
        <form action="islem.php" method="POST" >
            <div class="input-field">
                <input type="text" name="user_ad"  required="">
                <label>USERNAME</label>
                <span></span>
            </div>
            <div class="input-field">
                <input type="text" name="user_password" 
                 required="">
                <label>PASSWORD</label>
                <span></span>
            </div>
          
            <input type="submit" value="Login" name="insertupdate" class="btn">
            <input type="submit" value="Close" name="" class="btn">
            
            </form>
            <?php 

             if ($_GET['durum']=="no") {
             
             echo "User Not Found";

             } elseif ($_GET['durum']=="exit") {
             
             echo "Logout is complete";

             }

             ?>
            
            <!-- <input type="submit" value="????" name="" class="btn">
            <input type="submit" value="????" name="" class="btn"> -->

            <!-- <button class="btn">Update</button>
            <button class="btn">????</button>
            <button class="btn">????</button>
            <button class="btn">????</button> -->
        
    </div>
</body>

</html>