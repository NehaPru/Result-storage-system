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
$email = $_POST["email"];
$password = $_POST["password"];
}
$sql = "INSERT INTO alldth (email, password)
VALUES ('$email', '$password')";
$res=mysqli_query($conn,$sql);
if ($res) {
  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>