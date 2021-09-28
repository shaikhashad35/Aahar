<?php
  require('connect.php');

     if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['people']) && isset($_POST['date']) && isset($_POST['address']) ){
    $name = htmlentities($_POST['name'] );
    $mobile = htmlentities($_POST['phone'] );
    $people = htmlentities($_POST['people'] );
    $date= htmlentities($_POST['date'] );
    $address = htmlentities($_POST['address'] );
	
	 if (!empty($name) && !empty($mobile) && !empty($people) && !empty($date)&& !empty($address))
	{
	$query = "INSERT INTO `donate` (name, phone, people ,date,address) VALUES('$name', '$mobile', '$people',  '$date', '$address')";
         //echo $query;         
		 $response = mysqli_query($connection, $query); 
             if($response){
            echo "<script> alert('Thanks for Donating....!!')</script>";
             }
			 else{ echo "<script> alert('No response')</script>";  }
	}	 
	 else{
            echo "<script> alert('Failed to donate')</script>";		  
		  }
	
	 }
	?>



<!DOCTYPE html>
<html>
<head>
<style type="text/css">
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
    margin: -16px 16px 16px -16px;
   }
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
#inputtype{
    padding:3px 20px 3px 2px;
    width:250px;
   }	
#button{
   font-style:Italic;
   font-weight:bold;
   background:#F7F7F7;
   color:#555;
   }   
.submit{
   background: #43D1AF;
   text-align:center;
   margin: -16px -16px -30px -16px;
   padding:10px 10px 10px 10px;
}   
#time
{
	width:60px;
	margin-bottom:15px;
	color:#555;
}
    #date{
        width: 150px;
    }
	#mainimage{
            height: 35px;
            width: 35px;
        }
		 a{
            float: right;
            display: inline-block;
            margin-top: 50px;
            color: royalblue;
            font-weight: bold;
            font-size: 20px;
            margin-right: 50px;
        }
        h1{
            display: inline-block;
            color: #43d1af;
            font-size: 37px;
        }
</style>
</head>
<body>
<div class="heading">
    <img id="mainimage" src="aa.jpg" ><h1>AAHAR</h1>
    <a href="first.html" style="margin-right:30px">HOME</a><a href="register.php">SIGN UP</a><a href="contact.html" style="margin-right:30px;">CONTACT</a><a href="about.html" style="margin-right:30px;">ABOUT</a>
    </div>
<div class="form-style">
<h1>Donation details</h1>
<form action="donate.php" method="post">
<div class="form"><input type="text" name="name" placeholder="Your Name" id="inputtype"/><br><br>
<input type="number" name="phone" placeholder="Your Contact number" id="inputtype"/><br><br>
<input type="number" name="people" placeholder="Number of people can eat" id="inputtype"/><br><br>
TODAY'S DATE:<input type="date" id="date" name="date"  id="inputtype"/><br><br>    
<textarea name="address" placeholder="Type your Address" id="inputtype"></textarea><br><br></div>
<div class="submit"><button type="submit" id="button"/>Donate</button></submit>
</form>
</div>
</div>
</body>
</html>
