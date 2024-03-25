<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `tutor_table` WHERE `tutor_table`.`id` = '$id';";
        if(performQuery($query)){
            echo "OD Request has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="ac.php">Back</a>