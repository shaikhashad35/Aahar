<?php
require('connect.php');

$id=$_GET['id'];
$info=mysqli_query ($connection,"SELECT * FROM donate WHERE id=$id" );
$user=mysqli_fetch_assoc($info);
$result=mysqli_query ($connection,"DELETE FROM `donate` WHERE id=$id" );
//header("location : need.php");
?>
<html>
<style type="text/css">
.container{
  font-size: 30px;
  margin-top: 100px;
  max-width: 500px;
  background-color: lightgray;
  border: 5px solid;
  border-radius: 20px;
  padding-bottom: 25px;
}
p{
  background-color: #43d1af;
  padding-top: 20px;
  padding-bottom: 20px;
}

</style>
<body>
<?php
require('heading.php');
echo "<center><div class=container><p>Thank you for reserving food.</p> The food resevation details are: <br> NAME: ".$user['name']."<br> ADDRESS: ".$user['address']."<br> CONTACT NO: ".$user['phone']."<br></div></center>";

?>
<a href="need.php">Back to home</a>
</body>
</html>
