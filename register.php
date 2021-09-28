
<?php
    
  require('heading.php');
  require('connect.php');

  

  if (isset($_POST['user_name']) && isset($_POST['password'])&& isset($_POST['cpassword'])&& isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['address']) ){

    $email = htmlentities($_POST['email'] );
    $mobile = htmlentities($_POST['contact'] );
    $user = htmlentities($_POST['user_name'] );
    $password = htmlentities($_POST['password'] );
    $cpassword = htmlentities($_POST['cpassword'] );
    $add = htmlentities($_POST['address'] );
    
    if (!empty($email) && !empty($password) && !empty($cpassword) && !empty($user)&& !empty($mobile)&& !empty($add)){
		if($cpassword==$password){
          $query = "INSERT INTO `registration` (user_name, email, mobile ,password,address) VALUES ('$user', '$email', '$mobile',  '$password', '$add')";
          $response = mysqli_query($connection, $query);  
          //print_r($response);      
          if($response){
            echo "<script> alert('User Created Successfully.')</script>";
			header('Location: login.php');
            $results = mysqli_query($connection,"SELECT * FROM `registration` WHERE email='$email' AND Password='$password'");
            $field=mysqli_fetch_assoc( $results );

            
          }else{
            echo "<script> alert('User Registration Failed')</script>";
          }
        
    }else{
    	echo "<script> alert(Passwords do not match, please try again!')</script>";
        }
	}else{
      echo "<script> alert('Please enter all details!')</script>";
    }
  }
?>



<!DOCTYPE html>
<html >
    <head>
        <title>Register Form</title>
		 <style type="text/css">
  .form{
    margin:8px;
    text-align:center;
    padding:10px 5px;
    width: 100%;
    margin-bottom: 4%;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
	}
	.form-style{
    font-size: 95%;
 	font-family:Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
    }
.form-style h1{
    background: #43D1AF;
	text-transform:uppercase;
	text-alignment:center;
	border-style:solid;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
	text-decoration:bold;
    text-align: center;
    color: #fff;
    margin: -17px -17px 16px -17px;
   }
	</style>
    </head>
    <body>
	<div class="form-style">
    <h1> Registration </h1>
    <form action="register.php" method="post"  >
		<label  for="hospital_name">User Name</label><br>
		<input type="text" name="user_name" placeholder="User Name..." ><br><br>

		<label  for="email">Email</label><br>
		<input type="email" name="email" placeholder="Email..."><br><br>

		<label  for="password">Password</label><br>
		<input type="password" name="password" placeholder="Password..."><br><br>
				                       
		<label  for="cpassword"> Confirm Password</label><br>
		<input type="password" name="cpassword" placeholder=" Confirm Password..." ><br><br>

		<label for="address">Address</label><br>
		<textarea type="text" name="address" placeholder="Address..." ></textarea><br><br>
				              
		<label  for="contact">Contact</label><br>
		<input type="text" name="contact" placeholder="Contact..." ><br><br>
	    <button type="submit" >Sign in!</button>
	</form>
    <h3>Thank You!</h3>
    </body>

</html>