<?php 
include 'database.php';

if(isset($_GET['deletedid'])){
    $id = $_GET['deletedid'];

    $sqldelete = "delete from `crudtable` where id='$id'";
    $result = mysqli_query($mysqli,$sqldelete);
    if($result){
        echo "<h1>User has been deleted successfully</h1>";
    }else{
        die(mysqli_error($mysqli)) ;
    }

}

?>