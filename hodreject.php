<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `ac_table` WHERE `ac_table`.`id` = '$id';";
        if(performQuery($query)){
            echo "OD Request has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="hod.php">Back</a>