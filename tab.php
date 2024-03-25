<?php
    session_start(); 
    include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TUTOR APPROVAL</title>
	<link rel="stylesheet" text="" href="index2.css">
	
	<div class="logout">
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:login.php');
                }
                ?>
				<div class="headDiv">
					<img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
					<h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>             
	  <form method="post" class="logi">
                </form>
            </div>
	</div>
	<body>
	<div class="logoutDiv">
		<input type="button" class="log" name="logout" onclick="loginReturn()" value="Logout">
			</div>	

            <label class="title"> TUTOR APPROVAL</label><br><br>


<table class="tab1" style="width:100%">
             
             <tr>  
                     <th colspan="1" style="width:11%">Name</th>
                     <th colspan="1" style="width:9%">Rollnumber</th>
                     <th colspan="1" style="width:14%">Email</th>
                     <th colspan="1" style="width:5%">Department</th>
                     <th colspan="1" style="width:2%">Year</th>
                     <th colspan="1" style="width:10%">Tutor</th>
                     <th colspan="1" style="width:5%">From</th>
                     <th colspan="1" style="width:5%">To</th>
                     <th colspan="1" style="width:11%">Purpose</th>
                     <th colspan="2" style="width:11%">Confirmation</th>
             </tr>
           
            
			<?php
            
                $query = "select * from student_request where tutor_name = 'Dr.S.Hariharagopalan' ;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                       
                        ?>
        <table class="tab2" style="width:100%">
                <tr>
                    <td colspan="1" style="width:11%"> <?php echo $row['name']; ?> </td>
                    <td colspan="1" style="width:9%"> <?php echo $row['roll_number']; ?> </td>
                    <td colspan="1" style="width:14%"> <?php echo $row['email']; ?> </td>
                    <td colspan="1" style="width:5%"> <?php echo $row['department']; ?> </td>
                    <td colspan="1" style="width:2%"> <?php echo $row['year']; ?> </td>
                    <td colspan="1" style="width:10%"> <?php echo $row['tutor_name']; ?> </td>
                    <td colspan="1" style="width:5%"> <?php echo $row['from_date']; ?> </td>
                    <td colspan="1" style="width:5%"> <?php echo $row['to_date']; ?> </td>
                    <td colspan="1" style="width:11%"> <?php echo $row['purpose']; ?> </td>
                    <td colspan="1" style="width:5.5%"><a  href="taccept.php?id=<?php echo $row['id'] ?>"  class="aButton">Accept</a></td>
                    <td colspan="1" style="width:5.5%"><a  href="treject.php?id=<?php echo $row['id'] ?>" class="dButton">Decline</a></td>
                          
                      
            </tr>

        </table>  
</body>

		<?php
                    }
                }else{
                    echo '<div class="disdiv"> <h1 class="disdiv"> There is No Pending Request!... </h1> </div>';
                }
            ?>



