
<?php

session_start();

$con = mysqli_connect('localhost','root','','test12');
if($con){
echo "connected";
}else{
echo "not connected";

}


$nam = $_POST['user'];
$paswd = $_POST['password'];

//for finding the existing users .

$q = " SELECT * FROM log WHERE name = '$nam' && password ='$paswd'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


if($num == 1){

$_SESSION['username'] = $nam;
header ('location: ../home.php');



}else{
	echo "SORRY";
//	header('location:login.php');



} 










/*
<?php  

session_start();
//  header('location:login.php');

$con = mysqli_connect('localhost','root','','test');
if($con){
echo "connected";
}else{
echo "not connected";

}


$nam = $_POST['user'];
$eml = $_POST['email'];
$mobile = $_POST['phone'];
$paswd = $_POST['password'];



/*
$sq = "INSERT INTO `log` (`name`, `email`, `phone`, `password`, `date`) VALUES ('$nam', '$eml', '$mobile', '$paswd', current_timestamp());";

echo $sq;

if($con->query($sq)==true);

$result = mysqli_query($con, $sq);

$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username'] = $nam;
	header('location:home.php');


}else{
	echo "SORRY";
//	header('location:login.php');



} 

/*
?>
*/











?>
