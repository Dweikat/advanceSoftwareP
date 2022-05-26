<?php
$req = $_GET['req'];
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "advance";


// return user rqust  we ca add moer if else or file if we use mor request---------------
if ($req == "getuser"){
	
	 // Create connection-----------------------
	 $conn = new mysqli($servername, $username, $password , $dbname);
	 // Check connection
	 if ($conn->connect_error) {
	     die("failed");
	  }
	 $sql = "SELECT * FROM users ";
     $result=mysqli_query($conn,$sql);
	 // ------------------------------------------
	 while ($singleRow=mysqli_fetch_assoc($result)) {
		 
		echo $singleRow['name'] . "#";
	//	echo $singleRow['id'] . "#";
		echo $singleRow['phone'] . "#";
		echo $singleRow['email'] . "#";
		echo $singleRow['gender'] . "#";
		echo $singleRow['bd'] . "#";
		//echo '<img style="width:300px;height:300px;" src="data:image/png;base64,'.base64_encode($singleRow['img']).' "/>'; 
		echo 'data:image/png;base64,'.base64_encode($singleRow['img']);
		echo "$$";
		 
		
	 }
	 
}

 
 ?>