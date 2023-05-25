<?php
//include('connexion.php');

$host="localhost";
$user="root";
$password="root";
$dbname="learn2drive";
//$link=mysql_connect($host,$user,$password) or die ('impossible de se connceter');
//mysql_select_db($dbname,$link);


$mysqli = new mysqli($host,$user,"",$dbname);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$nom =$_POST['nom'] ;
$img =$_POST['img'] ;
$db  =$_POST['db'] ;
$pb  =$_POST['pb'] ;
$adr =$_POST['adr'] ;
$pn =$_POST['pn'] ;
$age =$_POST['age'] ;
$email =$_POST['email'] ; 
$ss =$_POST['ss'] ; 
$cs =$_POST['cs'] ; 
$lic =$_POST['lic'] ; 


$requete="insert into condidat(nom,img,db,pb,adr,pn,age,email,ss,cs,lic) values ('$nom', '$img', '$db', '$pb','$adr', '$pn', '$age', '$email', '$ss', '$cs', '$lic' );  ";
if(mysqli_query($mysqli,$requete))
echo 'insertion réussie<br> <a href="sign.html"> Retour </a>';
else
echo 'insertion non réussie<br> <a href="sign.html"> Retour </a>';

?>