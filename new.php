<?php
// MUTE NOTICES
//error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$database = "movies";

//movies -- table_name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
    //return "connected";
}

$sql = "SELECT * FROM `movie` WHERE 1";
$query =  mysqli_query($conn, $sql);
 

   
  ?>
   <table border="1">
       <tr>
           <td>S_no.</td>
           <td>Movies_Name</td>
           <td>Lead_Actor</td>
           <td>Lead_Actress</td>
		   <td>Director</td>
		   <td>Date_of_release</td>
       </tr>
       <?php foreach ($query as $rows) {?>
       <tr>
           <td><?php echo $rows['S_no.'];?></td>
           <td><?php echo $rows['Movies_Name'];?></td>
           <td><?php echo $rows['Lead_Actor'];?></td>
           <td><?php echo $rows['Lead_Actress'];?></td>
		   <td><?php echo $rows['Director'];?></td>
		   <td><?php echo $rows['Date_of_release'];?></td>
       </tr>
       <?php }?>
   </table> 
  <?php


?>
