<?php
    session_start(); 
    include("functions.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutor Request</title>
  </head>
  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hello, <?php echo $_SESSION['type'] ?></strong>
          </a>
            <div class="logout">
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:home.php');
                }
                ?>
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>

        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
            
                $query = "select * from `students`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
<body>
	<div class="headDiv">
        <img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
        <h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>
    </div>
    <div class="approvalDiv">
    <h2 class="align">TUTOR APPROVAL</h2>	
    <div class="div1">
    	<div class="flexdiv">
			<label for="name" class="label ">Student Name: <?php echo $row['name'] ?></label>
		
		</div>

		<div class="flexdiv">
			<label for="roll_number" class="label ">Rollnumber: <?php echo $row['roll_number'] ?></label>
			<label class="label minitext" >An</label>
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
                        <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      <br>
                    <small><i> <?php echo $row['date'] ?></i></small>
            <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
            ?>
          
        </div>
          
      </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>