<?php
    session_start();  
    include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>On-Duty Form</title>
    <link rel="stylesheet"  href="index2.css">
</head>
<body>
    <div class="headDiv">
        <img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
        <h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>
    </div>

    <div class="wholeDiv">
        <h2>ON-DUTY FORM</h2>
        <div class="div1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="dateDiv">   
                <label for="date_1" class = "label">Date:</label>
                <input type="date" id="date_0" class="minitext" name="date_0" required>
            </div>

            <div class="flexdiv">
            <label for="name" class="label ">Student Name:</label>
            <input type="text" id="name" class="minitext textBox" name="name" required>
        </div>

        <div class="flexdiv">
            <label for="roll_number" class="label">Rollnumber:</label>
            <input type="text" id="roll_number"  class="minitext rollnoDiv" name="roll_number" required>
        </div>

        <div class="flexdiv">
            <label for="email" class="label">Email:</label>
            <input type="text" id="email" class="minitext textBox" name="email" required>
        </div>

    <div class="flexdiv2">
        <label for="department" class="label">Department:</label>
        <select id="department" name="department" class="minitext" onchange="updateyear()">
            <option value="M.TECH CSE">M.TECH CSE</option>
            <option value="BE CSE">BE CSE</option>
            <option value="ME AIDS">ME AIDS</option>
        </select>


        <label for="year" class="label">Year:</label>
        <select id="year" name="year" class="minitext" onchange="updatesection()">
        </select>
</div>
        <div class="flexdiv2">
        <label for="section" class="label">Section:</label>
        <select id="section" name="section" class="minitext" onchange="updatet_name()">
        </select>
  
        <label for="t_name" class="label">Tutor Name:</label>
        <select id="t_name" name="t_name" class="minitext">
        </select>
        <script src="index.js"></script>


        </div>

        <div class="flexdiv">
            <label for="date_1" class="label">From Date:</label>
            <input type="date" id="date_1" class="minitext" name="date_1" required>

            <label for="date_2" class="label">To Date:</label>
            <input type="date" id="date_2" class="minitext" name="date_2" required>
        </div>

        <div class="flexdiv">
            <label for="purpose" class="label">Purpose:</label>
            <input type="text" id="purpose" class="minitext textBox" name="purpose" required>
        </div>

        
            <input type="submit" class="b1" value="Submit"> 
    </form>
</div>
</div>
<?php
$servername = "localhost:3305";
$username = "root";
$password = "";
$dbname = "jack";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {    
$date_0 = $_POST['date_0'];
$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$email = $_POST['email'];
$department = $_POST['department'];
$year = $_POST['year'];
$section = $_POST['section'];
$t_name = $_POST['t_name'];
$date_1 = $_POST['date_1'];
$date_2 = $_POST['date_2'];
$purpose = $_POST['purpose'];
$sql = "INSERT INTO student_request (id, date, name, roll_number, email ,department, year,section, tutor_name, from_date, to_date, purpose)
VALUES ( 'NULL','$date_0','$name', '$roll_number', '$email', '$department', '$year','$section','$t_name', '$date_1', '$date_2', '$purpose')";
if (!$conn->query($sql) === TRUE) {
    echo "Error inserting values: " . $conn->error;
}else{
    echo "<script>alert('OD Request is Sent!..');</script>";
}
}
$conn->close();
?>
</body>
</html>