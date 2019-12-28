<?php  
ini_set("display_errors", 1);
ob_start();
session_start();

include 'connect.php';

if (isset($_POST['insertupdate'])) {

 $user_ad=$_POST['user_ad'];
   $user_password=md5($_POST['user_password']);

$kullanicisor=$db->prepare("SELECT * FROM user where user_ad=:ad and user_password=:password and user_yetki=:yetki
  ");
$kullanicisor->execute(array(
'ad'=>$user_ad,
'password'=>$user_password,
'yetki'=>5
));

echo $say=$kullanicisor->rowCount();


 if ($say==1) {
  	

	$_SESSION['a']=$user_ad;
	header("Location:../index2.php?durum=ok");
	exit;

  } else{
  	header("Location:index.php?durum=no");
  	exit;
  }

}



if (isset($_POST['insertsubmit'])) {
  
  $save=$db->prepare("INSERT INTO settings set 

      settings_name=:settings_name,
      settings_surname=:settings_surname,
      settings_mail=:settings_mail,
      settings_age=:settings_age,
      settings_carxp=:settings_carxp,
      settings_family=:settings_family
    ");
  $insert=$save->execute(array(

    'settings_name'=>$_POST['settings_name'],
    'settings_surname'=>$_POST['settings_surname'],
    'settings_mail'=>$_POST['settings_mail'],
    'settings_age'=>$_POST['settings_age'],
    'settings_carxp'=>$_POST['settings_carxp'],
    'settings_family'=>$_POST['settings_family']

  ));

if ($insert) {
  header("Location:../index.php?durum=ok");
  exit;
}
else{
 header("Location:../index.php?durum=no");
  exit;
}


}

?>