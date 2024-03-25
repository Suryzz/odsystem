<?php
    include('functions.php');

        $servername = "localhost:3305";
          $username = "root";
          $password = "";
          $dbname = "jack";
          $id = $_GET['id'];
    $query = "select * from `tutor_table` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){

            $date_0 = $row['date'];
            $name = $row['name'];
            $roll_number = $row['roll_number'];
            $email = $row['email'];
            $department = $row['department'];
            $year = $row['year'];
            $section = $row['section'];
            $t_name = $row['tutor_name'];
            $date_1 = $row['from_date'];
            $date_2 = $row['to_date'];
            $purpose = $row['purpose'];

            $query = "INSERT INTO ac_table ( id, date, name, roll_number, email ,department, year,section, tutor_name, from_date, to_date, purpose)
            VALUES ('NULL', '$date_0','$name', '$roll_number', '$email', '$department', '$year','$section','$t_name', '$date_1', '$date_2', '$purpose')";   
    }
    if(performQuery($query)){
        echo "OD Request has been accepted.";
        $query = "DELETE FROM `tutor_table` WHERE `tutor_table`.`id` = '$id';";
        deleteQuery($query);
    }else{
        echo "Unknown error occured. Please try again.";
    }
}else{
    echo "Error occured.";
}
    ?>
<a href="ac.php">Back </a>