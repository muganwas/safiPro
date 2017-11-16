<?php

class newExce extends Exception {
	
	public function serverConnectError(){
		
		return $e_message = 'Error: Could not connect to server';
	}
	public function dbConnectionError(){
		
		return $e_error = 'There was a problem connceting to the database!';
		
	}
	public function dbInsertError(){
		
		return $db_error = 'There was a problem sending the data!';
	}
	public function alreadySubscribed(){
		
		return $e_exists = 'You already subscribed!';
	}
	public function alreadyUnsubscribed(){
		
		return $e_exists = 'You already unsubscribed!';
	}
	public function genericError(){
		return $msg = 'Error: Something went wrong, Try again later.';
	}
	public function emailfError(){
		
		return $msg = 'Email was not sent, try again later.';
	}
		
}

function serverConnect($server, $user, $pass, $database){
		  
	  if($connect =new mysqli($server, $user, $pass, $database)){

		  $msg = 'ok';
		  
	 }else{
		  
		  $error = new newExce;
		  $msg = $error->serverConnectionError;
	  }
	return($msg);
}
 

?>
