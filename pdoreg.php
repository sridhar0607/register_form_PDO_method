
<?php
$server="localhost";
$uname="root";
$psw="";
$db="task";
try{
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psw);


$regno=$_POST['regno'];
$sname=$_POST['sname'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$addr=$_POST['addr'];

$query="INSERT into std(regno,sname,gen,email,pass,phone,dept,addr)values(:rn,:nm,:gn,:em,:ps,:pn,:dt,:ad)";
$stmt=$con->prepare($query);

if($stmt->execute([":rn"=>$regno,":nm"=>$sname,":gn"=>$gen,":em"=>$email,":ps"=>$pass,":pn"=>$phone,":dt"=>$dept,":ad"=>$addr]))
{
	$id=$con->lastinsertID();
	echo"id number:".$id."-inserted successfully";
}
else
{
	echo"<script>alert(' not inserted ')</script>";
}
}
catch(PDOExceptio $e)
{
	echo $e->getmessage();
}


?>