<?php
include "config.php";
$count = $_GET['count'];
$id = $_GET['id'];

$sql = "update images set count =$count where id=$id";
echo $sql;
if(mysqli_query($connect, $sql)){
    echo "OK!";
}
else{
    echo "Wrong!";
}

?>