<?php 
include  'conn.php';
if(isset($_REQUEST['del']))
{
//Get row id
$uid=intval($_GET['del']);
//Qyery for deletion
$sql = "delete from member WHERE  id=:id";
// Prepare query for execution
$query = $dbconnection->prepare($sql);
// bind the parameters
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
echo "<script>alert('Record Delete successfully');</script>";
// Code for redirection
echo "<script>window.location.href='display.php'</script>";
}
?>