
<?php
require('heading.php');
 require('connect.php');
 if (isset($_POST['email']) && isset($_POST['password']) ){
    
   $email = htmlentities($_POST['email'] );
   $password = htmlentities($_POST['password'] );

   if (!empty($email) && !empty($password) ){
   $query = "SELECT * FROM `registration` WHERE email='$email' AND password='$password'";

   $results = mysqli_query($connection, $query);
   $count = mysqli_num_rows($results);
   if($count == 1){
     echo "Login successfull";
	 header('Location: need.php');
     
   }else{
     echo "Login Unsuccessful";
   }
 }else{
  echo "Please enter all details!";
 }
}

?>
<!DOCTYPE html>
<html >
  <head>
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
    margin: -37px 302px 16px -37px;
   }
	</style>
  </head>
  <body>     
   
     <div class="form-style">
<div class="form">	 
    <h1> Login Form   </h1>
                         <p>Enter username and password to log on:</p>
	    <form  action="login.php" method="post"  >
				        						
				  <label  for="email">Username</label><br>
					<input type="text" name="email" placeholder="Enter Your EmailID"><br><br>
				                       
			  	<label for="password">Password</label><br>
				  <input type="password" name="password" placeholder="Enter your Password" ><br><br>
				                        
				  <button type="submit" class="btn">Log in!</button>
	    </form>
		</div>
                     
    </body>

</html>