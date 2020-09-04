<?php
include_once("config.php");

$id= $_GET['id'];
$sql="DELETE FROM patient WHERE id=:id";
$con = config::connect();
$query=$con->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
if ($query->execute([':id'=>$id])){
    echo "You have Successfully Deleted";
    header("location: index.php");

}
?>
