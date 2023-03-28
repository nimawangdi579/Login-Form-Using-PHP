<?php 
include  'conn.php';
$succMsg= NULL;
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username  = $_POST['username'];
$password = $_POST['password'];


$sql="INSERT INTO member (firstname,lastname,username,password) Values(:firstname,:lastname,:username,:password)";
$query = $dbconnection -> prepare($sql);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);

$query -> execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0)
{
echo "<script>alert('Data insert Successfully');</script>";
echo "<script>window.location.href='display.php'</script>";
 }
else {

echo "Data not insert successfully";
 }
}
?>