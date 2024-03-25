<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `student_request` WHERE `student_request`.`id` = '$id';";
        if(performQuery($query)){
            echo "OD Request has been rejected.";
            if( $t_name=="Mrs.K.Ranjithapriya"){
                echo  "<a href='tutor2.php'>Back </a>";
              }elseif($t_name=="Mrs.C.Sountharya"){
                  echo  "<a href='tutor3.php'>Back </a>";
              }else{
                  echo  "<a href='tutor1.php'>Back </a>";
              }

        }else{
            echo "Unknown error occured. Please try again.";
        }
?>
<br/><br/>
