<?php

$host="localhost";
$user="root";
$password="";
$database="ser";

$connect=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
	die("cannot".mysqli_connect_errno());
	}
	else{
		echo"can <br>";
	}

$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
$s5 = $_POST['s5'];
$s6 = $_POST['s6'];
if(isset($_POST['save'])){
$my_query = "select * from serv WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO serv (s1, s2, s3, s4, s5, s6) VALUES ('$s1', '$s2', '$s3', '$s4', '$s5', $s6)";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "successfuly added";
    }
    else{
        echo " ERROR <br>";
    }
}
else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "select * from v-on WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `v-on`(`on`, `off`) VALUES (1 ,0)";
    $result = mysqli_query($connect, $my_query);
    if($result)
    {
        echo "successfuly added";
    }
    else{
		
        echo " ERROR <br>";
    }
}