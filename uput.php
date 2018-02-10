<?php
    // Connect to MySQL
    include("dbconnect.php");
	
 
	 
	$faultStatus = "";
	$lat1 = "";
	$geolong1 = "";
	 
	 

     
	//if($uname=$_GET["f1"] == "s1")
	//{
    //$fisher_name1= "P. Induja";
	//$address1 = "Salem";
	//$mobileNo1 = "7418392283";
	//$lat1 = $_GET["lt"];
	//$geolong1 = $_GET["ln"];
	//$boat_status1 = "Warning Zone";
	 
	//}
	
	
	 if($uname=$_GET["f1"] == "c")
	{
	    $faultStatus = "Crack Detection";
		$lat1 = "11.78";
		$geolong1 = "78.1223";
		
	}
	if($uname=$_GET["f1"] == "obj")
	{
		$faultStatus = "Object Detection";
		$lat1 = "11.78";
		$geolong1 = "78.1223";
	}

	
 $SQL = "INSERT into uri_status(fault_detection,lat,longtitude) VALUES('$faultStatus','$lat1','$geolong1')"; 
	
    // Prepare the SQL statement
   // $SQL = "INSERT INTO driver (driver_status) VALUES ('$recharge_status')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: uir.php");
?>

