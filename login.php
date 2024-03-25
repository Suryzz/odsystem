<?php
    session_start();  
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>

  
  <title>Tutor login</title>
  <link rel="stylesheet"  href="index2.css">

  </head>

  <body >
  <?php
      
      if(isset($_POST['signin'])){
          $password = $_POST['password'];
          $email = $_POST['email'];
          $query = "SELECT * from `accounts`;";
          if(count(fetchAll($query)) > 0){ 
                foreach(fetchAll($query) as $row){
                  if($row['email']==$email&&$row['password']==$password&&$row['grade']=="tutor"&&$row['name']=="Dr.S.Hariharagopalan"){
                      $_SESSION['login'] = true;
                      header('location:tutor1.php');
                  }elseif($row['email']==$email&&$row['password']==$password&&$row['grade']=="tutor"&&$row['name']=="Mrs.K.Ranjithapriya"){
                      $_SESSION['login'] = true;
                      header('location:tutor2.php');
                
                  }elseif($row['email']==$email&&$row['password']==$password&&$row['grade']=="tutor"&&$row['name']=="Mrs.C.Sountharya"){
                    $_SESSION['login'] = true;
                    header('location:tutor3.php');
                }
                  else if($row['email']==$email&&$row['password']==$password&&$row['grade']=="ac"){
                    $_SESSION['login'] = true;
                  
                    header('location:ac.php');
                  }else if(['email']==$email&&$row['password']==$password&&$row['grade']=="hod"){
                    $_SESSION['login'] = true;
                  
                    header('location:hod.php');
                  }
                  else{
                      echo "<script>alert('Wrong login details.')</script>";
                  }
              }
          }
      }
    
    ?>
      <div class="wholeDiv">
            <form method="post" class="form-signin">
              
            <div class="headDiv">
        <img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
        <h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>
    </div>
    <div class="wholeDiv">
        <h2>ON-DUTY FORM</h2>
    </div>       
           <div class="div1">     
           <div class="flexdiv">
              <label for="inputEmail" class="label">Email:</label>
              <input name="email" type="email" id="inputEmail" class="minitext textBox" placeholder="Email address" required autofocus>
              </div>

              <div class="flexdiv">
              <label for="inputPassword" class="label">Password:</label>
              <input name="password" type="password" id="inputPassword" class="minitext textBox" placeholder="Password" required>
             </div>

              <button name="signin" class="b1" type="submit">Sign in</button>
    </div>
            </form>
          </div>
  </body>
</html>