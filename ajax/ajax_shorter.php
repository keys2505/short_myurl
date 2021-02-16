<?php 
include '../db/db_connection.php';
include '../db/entity/shorter.php'; 
date_default_timezone_set('Asia/Jakarta');

 $urlValid = FALSE;


$curl = curl_init($_GET['URL']);
curl_setopt($curl, CURLOPT_NOBODY, true);
$result = curl_exec($curl);
if ($result !== false){
  $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
  if ($statusCode == 404){
    $urlValid = FALSE;
  }else{
     $urlValid = TRUE;
  }
}else{
  $urlValid = FALSE;
}


if($urlValid){
	if($_GET['URL'] != null){
		$shorter = new Shorter();
		
		$shorterUrl = $shorter -> genShorterURL();
		$shorterId = $shorter -> genShorterID();
		
		//echo "Shorter Url = ".$shorterUrl."<br>";
		//echo "Shorter ID = ".$shorterId."<br>";
		//echo "URL = ".$_GET['URL']."<br>";

		$query = "";
		$query = $query."INSERT INTO `shorter` (`ID_SHORTER`, `SHORTER_URL`, `URL`, `PASSWORD`) VALUES ( ";
		$query = $query."'".$shorterId."',";
		$query = $query."'".$shorterUrl."',";
		$query = $query."'".$_GET['URL']."',";
		$query = $query."''";
		$query = $query."); ";

		//echo "QUERY = ".$query."<br>";


		 $conn = new DBConnection();
		 $conn -> get_connetion();

		if ($conn->execute_query($query) === TRUE) {
		  echo $_SERVER['HTTP_HOST']."/".$shorterUrl;
		} else {
		   echo "Error: " . $query . "<br>" . $conn->error;
		}

		$conn -> close_connetion();
	}else{
		echo "FALSE";	
	}
}else{
	echo "INVALID";
}
  
?>