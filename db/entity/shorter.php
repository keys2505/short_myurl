<?php

class Shorter {
	public $id_shorter = 0;
	public $shorter_url = "";
	public $url = "";
	public $password = "";
	

  function get_id_shorter() {
	return $this->id_shorter;
  }
 function set_id_shorter($id_shorter) {
	 $this->id_shorter = $id_shorter;
  }
  function get_shorter_url() {
	return $this->shorter_url;
  }
 function set_shorter_url($shorter_url) {
	 $this->shorter_url = $shorter_url;
  }
  function get_url() {
	return $this->url;
  }
 function set_url($url) {
	 $this->url = $url;
  }
  function get_password() {
	return $this->password;
  }
 function set_password($password) {
	 $this->password = $password;
  }
  

  function auto_set($resut_db){
  	while($row = $resut_db->fetch_assoc()) {
	    $this->id_shorter =  $row["ID_SHORTER"];
	    $this->shorter_url =  $row["SHORTER_URL"];
	    $this->url =  $row["URL"];
	    $this->password =  $row["PASSWORD"];
	}
  }
  
  function genShorterURL(){
  	$shorterUrl= $this -> encrypt(date("s")).$this -> encrypt(date("i")).$this -> encrypt(date("d")).$this -> encrypt(substr(date("Y"),0,-2)).$this -> encrypt(date("m")).$this -> encrypt(date("H"));
  	return $shorterUrl;
  }

  function genShorterID(){
  	$shorterId = date("Y").date("m").date("d").date("H").date("i").date("s");
  	return $shorterId;
  }
    function encrypt($num_data){
    	$result = "";
    	switch ($num_data) {
		 case 0:
		    $result = "8" ;
		    break;
		case 1:
		    $result = "A" ;
		    break;
		case 2:
		    $result = "B" ;
		    break;
		case 3:
		    $result = "C" ;
		    break;
		case 4:
		    $result = "D" ;
		    break;
		case 5:
		    $result = "E" ;
		    break;
		case 6:
		    $result = "F" ;
		    break;
		case 7:
		    $result = "G" ;
		    break;
		case 8:
		    $result = "H" ;
		    break;
		case 9:
		    $result = "I" ;
		    break;
		case 10:
		    $result = "J" ;
		    break;
		case 11:
		    $result = "K" ;
		    break;
		case 12:
		    $result = "L" ;
		    break;
		case 13:
		    $result = "M" ;
		    break;
		case 14:
		    $result = "N" ;
		    break;
		case 15:
		    $result = "O" ;
		    break;
		case 16:
		    $result = "P" ;
		    break;
		case 17:
		    $result = "Q" ;
		    break;
		case 18:
		    $result = "R" ;
		    break;
		case 19:
		    $result = "S" ;
		    break;
case 20:
		    $result = "T" ;
		    break;
case 21:
		    $result = "U" ;
		    break;
case 22:
		    $result = "V" ;
		    break;
case 23:
		    $result = "W" ;
		    break;
case 24:
		    $result = "X" ;
		    break;
case 25:
		    $result = "Y" ;
		    break;
case 26:
		    $result = "Z" ;
		    break;
case 27:
		    $result = "a" ;
		    break;
case 28:
		    $result = "b" ;
		    break;
case 29:
		    $result = "c" ;
		    break;
case 30:
		    $result = "d" ;
		    break;
case 31:
		    $result = "e" ;
		    break;
case 32:
		    $result = "f" ;
		    break;
case 33:
		    $result = "g" ;
		    break;
case 34:
		    $result = "h" ;
		    break;
case 35:
		    $result = "i" ;
		    break;
case 36:
		    $result = "j" ;
		    break;
case 37:
		    $result = "k" ;
		    break;
case 38:
		    $result = "l" ;
		    break;
case 39:
		    $result = "m" ;
		    break;
case 40:
		    $result = "n" ;
		    break;
case 41:
		    $result = "o" ;
		    break;
case 42:
		    $result = "p" ;
		    break;
case 43:
		    $result = "q" ;
		    break;
case 44:
		    $result = "r" ;
		    break;
case 45:
		    $result = "s" ;
		    break;
case 46:
		    $result = "t" ;
		    break;
case 47:
		    $result = "u" ;
		    break;
case 48:
		    $result = "v" ;
		    break;
case 49:
		    $result = "w" ;
		    break;
case 50:
		    $result = "x" ;
		    break;
case 51:
		    $result = "y" ;
		    break;
case 52:
		    $result = "z" ;
		    break;
case 53:
		    $result = "0" ;
		    break;
case 54:
		    $result = "1" ;
		    break;
case 55:
		    $result = "2" ;
		    break;
case 56:
		    $result = "3" ;
		    break;
case 57:
		    $result = "4" ;
		    break;
case 58:
		    $result = "5" ;
		    break;
case 59:
		    $result = "6" ;
		    break;
case 60:
		    $result = "7" ;
		    break;

		}
		return $result;
  }


}

?>