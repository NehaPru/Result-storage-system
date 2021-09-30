<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btlit";
 Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST))
{	
$name = $_POST["name"];
$usn = $_POST["usn"];
$subject = $_POST["subject"];
$marks = $_POST["marks"];
}
$sql = "INSERT INTO alldth (name, usn,  subject , marks)
VALUES ('$name', '$usn', '$number',' $subject','$marks')";
$res=mysqli_query($conn,$sql);
if ($res) {
  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>