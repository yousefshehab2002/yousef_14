<?php

$direction =$_REQUEST['Directions'];
$to = $_REQUEST['to'];
$from = $_REQUEST['from'];
$dtb = $_REQUEST['DTB'];

if(isset($_POST['submit'])){

$host="localhost";
$user ="root";
$password ="";
$db = "yousef";

$conn = mysqli_connect($host, $user, $password, $db);

$insert = "INSERT INTO data_yousef VALUES('$direction', '$to', '$from', '$dtb')";

$result = mysqli_query($conn, $insert);


if($result){
    echo("<h1>Your data is here successfully!</h1>");
}else{
    echo("<h1>Your Data Faild!!</h1>");
};

mysqli_close($conn);

};

?>