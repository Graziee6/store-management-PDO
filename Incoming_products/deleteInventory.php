<?php
session_start();
if(!$_SESSION['userId']){
    header("Location:../Users/login.php");
 }
include("./../connection.php");
$id=$_GET['Id'];
$deleteInventory = mysqli_query($connection, "DELETE FROM stk_inventory WHERE productId='$id'");
if(!$deleteInventory){
    echo "Couldn't delete";
}
else{
    echo "Data successfully deleted";
}
?>