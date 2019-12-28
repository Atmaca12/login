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
                <input type="text" name="settings_name"  required="">
                <label>Name</label>
                <span></span>
            </div>
            <div class="input-field">
                <input type="text" name="settings_surname" 
                 required="">
                <label>Surname</label>
                <span></span>
            </div>

             <div class="input-field">
                <input type="text" name="settings_mail" 
                 required="">
                <label>E-Mail</label>
                <span></span>
            </div>

             

             <div class="input-field">
                <input type="text" name="settings_age" 
                 required="">
                <label>Age</label>
                <span></span>
            </div>

             <div class="input-field">
                <input type="text" name="settings_carxp" 
                 required="">
                <label>Driving Experience</label>
                <span></span>
            </div>

             <div class="input-field">
                <input type="text" name="settings_family" 
                 required="">
                <label>Family Status</label>
                <span></span>
            </div>
            

            <input type="submit" value="Submit" name="insertsubmit" class="btn">
            <input type="submit" value="Close" name="" class="btn">
            </form>
            

             
            
             <!--<input type="submit" value="Submit" name="insertsubmit" class="btn">
            <input type="submit" value="Close" name="" class="btn"> -->

            <!-- <button class="btn">Update</button>
            <button class="btn">????</button>
            <button class="btn">????</button>
            <button class="btn">????</button> -->
        
    </div>
</body>

</html>