<?php 
try {
   
  $db=new PDO("mysql:host=localhost;dbname=selam;charset=utf8",'root','annebabq123');


  

	
} catch (PDOException $e) {
  echo $e->getMessage();
}

 ?>