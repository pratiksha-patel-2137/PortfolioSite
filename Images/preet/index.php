<?php
if(isset($_POST['name'])){
  $server ="localhost";
  $username ="root";
  $password ="";

  $con = mysqli_connect($server,$username,$password);

  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error());
  }
 // echo "Successfully connected to the db";
 $name = $_POST['name'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
$sql = " INSERT INTO `sage`.`nature` ( `Name`, `Age`, `Email`, `Phone`) VALUES ( '$name', '$age', '$email', '$phone');";
echo $sql;

if($con->query($sql)==true){
 echo "successfully inserted";
}
else{
 echo "error: $sql<br> $con->error";
}
$con->close();
}
?>

