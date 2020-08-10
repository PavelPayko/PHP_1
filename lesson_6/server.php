<?php
include "config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$text = $_POST['text'];

$sql = "INSERT INTO `reviews` (`name`, `text`) VALUES ('$name', '$text');";
// echo $sql;
if(mysqli_query($connect, $sql)){
    echo "OK!";
}
else{
    echo "Wrong!";
}
// print_r($_POST);
?>