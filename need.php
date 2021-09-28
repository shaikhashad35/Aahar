<html>
<head>
    <style type="text/css" rel="stylesheet">
	table{
             margin:40px 300px;
             font-size:22px;
			 border:1; align:center; cellpadding:5px; width:50%;

         }
        table th{
            color:white;
            background-color:#43D1AF;
            font-size: 20px;
         }
    </style>
    </head>
<body>
<?php
require('heading.php');
require('connect.php');
 $result=mysqli_query ($connection,"SELECT * FROM donate order by date DESC" );
    if($result){
        echo "<table>
        <th>NAME</th>
        <th>CONTACT NO.</th>
        <th>NO.OF PEOPLE CAN EAT</th>
        <th>DATE</th>
        <th>ADDRESS</th>
	<th>Reserve</th>";
        while($row=mysqli_fetch_assoc($result)){

 $url= "delete.php?id=".$row['id'];
            echo '<tr>',
                '<td>',$row['name'],'</td>',
                '<td>',$row['phone'],'</td>',
                '<td>',$row['people'],'</td>',
                '<td>',$row['date'],'</td>',
                '<td>',$row['address'],'</td>',
		'<td>',"<a href=$url>Reserve</a>",'</td>',
                '<tr>';
        }
    }
    else{
        echo "No availability,Sorry for this";
    }
 ?>
 </table>
    </body>
    </html>
