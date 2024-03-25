<?php
    session_start(); 
    include("functions.php");
?>



<html>
    <title>
        <title>Confirm Page</title>
        <link rel="stylesheet" text="" href="index2.css">
        <script src="index.js"></script>
    </title>
    <body>
        <head>
        <div class="headDiv">
            <img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
            <h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>
        </div>
        <form method="post" class="logi">
                </form>
            <table>
                 
            <tr>  
                    <th class="tal1">Name</th>
                    <th>Rollnumber</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Tutor</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Purpose</th>
                    <th colspan="2">Confirmation</th>
                </tr>

            <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:login.php');
                }
                ?>

<?php       
            
            $query = "select * from student_request where tutor_name = 'Dr.S.Hariharagopalan' ;";
            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){
                   ?> 
                   </head>   
         <tr>   
                
                    <td colspan="1"> <?php echo $row['name']; ?> </td>
                    <td colspan="1"> <?php echo $row['roll_number']; ?> </td>
                    <td colspan="1"> <?php echo $row['email']; ?> </td>
                    <td colspan="1"> <?php echo $row['department']; ?> </td>
                    <td colspan="1"> <?php echo $row['year']; ?> </td>
                    <td colspan="1"> <?php echo $row['tutor_name']; ?> </td>
                    <td colspan="1"> <?php echo $row['from_date']; ?> </td>
                    <td colspan="1"> <?php echo $row['to_date']; ?> </td>
                    <td colspan="1"> <?php echo $row['purpose']; ?> </td>
                    <td colspan="1"><button class="aButton">Accept</button></td>
                    <td colspan="1"><button class="dButton">Decline</button></td>
                          
                </tr>

            </table>  
    </body>
<?php
                    } 
                }else{
                    echo '<div class="disdiv"> <h1 class="disdiv"> There is No Pending Request!... </h1> </div>';
                }
            ?>

