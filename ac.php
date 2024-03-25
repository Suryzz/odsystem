<?php
    session_start(); 
    include("functions.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ac_Approval</title>
	<link rel="stylesheet" text="" href="surya.css">
	
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
	
</head>
	<body>
<div class="logoutDiv">
		<input type="button" class="log" name="logout" onclick="loginReturn()" value="Logout">
			</div>

			<?php
            
                $query = "select * from `tutor_table`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>

	
    <div class="approvalDiv">
   	
    <div class="div1">
	<label class="title"> ACADAMIC CO-ORDINATOR APPROVAL</label><br><br>


    	<div class="flexdiv">
			<label for="name" class="label ">Student Name: <?php echo $row['name'] ?></label>
		
		</div>

		<div class="flexdiv">
			<label for="roll_number" class="label ">Rollnumber: <?php echo $row['roll_number'] ?></label>
		</div>

		<div class="flexdiv">
			<label for="email" class="label">Email: <?php echo $row['email'] ?></label>
		
		</div>

		<div class="flexdiv">
			<label for="t_name" class="label">Department: <?php echo $row['department'] ?></label>
			<label class="label"></label>
		</div>	

		<div class="flexdiv">
			<label for="year" class="label">Year: <?php echo $row['year'] ?></label>
			<label class="label"></label>
		</div>

		<div class="flexdiv">
			<label for="t_name" class="label">Tutor Name: <?php echo $row['tutor_name'] ?></label>
			<label class="label"></label>	
		</div>

		<div class="flexdiv">
			<label for="date_1" class="label">From Date: <?php echo $row['from_date'] ?></label>
		
		</div>

		<div class="flexdiv">
			<label for="date_2" class="label">To Date: <?php echo $row['to_date'] ?></label>
		
		</div>
    <div class="flexdiv">
            <label for="purpose" class="label">Purpose: <?php echo $row['purpose'] ?> </label>
                    </div>
		<div class="buttonDiv">
		<a href="acaccept.php?id=<?php echo $row['id'] ?>"  type="button" class="aButton" name="acceptButton" value="Approve">Approve</a>
			<a  href="acreject.php?id=<?php echo $row['id'] ?>" type="button" class="dButton" name="declineButton" value="Decline">Decline<a>
			<small class="date"><i class="date"> <?php echo $row['date'] ?></i></small>
		</div>
	</div>
	</div>
</body>

		<?php
                    }
                }else{
                    echo '<div class="disdiv"> <h1 class="disdiv"> There is No Pending Request!... </h1> </div>';
                }
            ?>



