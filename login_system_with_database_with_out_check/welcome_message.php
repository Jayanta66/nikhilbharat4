    <?php
   


 $insert == false;
//session_start();
 //header('location:welcome.php');

$con = mysqli_connect('localhost','root','','test1',);
if($con){
echo "connected";
}else{
echo "not connected";

}

if($insert == true){
    echo "welcome to this website";

}

    ?>