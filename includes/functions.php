<?php require("conf.inc.php"); ?>
<?php
if(serverConnect($server, $user, $pass, $database)=='ok'){
	
	$connected = 1;
	
}
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
	public function notSubscribed(){

		return $msg = "You have not subscribed yet!";
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
	public function emailfError2(){
		
		return $msg = ' but We could not send you an email at the moment, many apologies.';
	}
	public function emailExistsError(){
		
		return $msg = 'You\'re Email address is already in our database';
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
function realness(){
	
	echo 'Developed by <a href="https://www.upwork.com/freelancers/~01edb2b7356420e161" alt="Steven Muganwa" >Muganwas</a>';
	
}
function dataFetch($id, $query){	
	
	global $server;
	global $user;
	global $pass;
	global $database;
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->bind_param("i", $id);
			$connect->execute();
			$connect->bind_result($rez);
			$connect->fetch();
			
			echo $rez;
			
			
		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
		
		echo $ex->serverConnectError();
	}
	
}
function dataFetchMulti($id, $type, $query){	
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	try{
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->bind_param($type, $id);
			$connect->execute();
			$connect->bind_result($rez);	
			while($connect->fetch()){
				
				$arre[] = $rez;
				
			}
			for($x=0; $x<count($arre); $x++){
				
				echo $arre[$x];
			}
			
		}else{	
			throw new newExce;
		}	
	}catch(newExce $ex){
		echo $ex->serverConnectError();
	}
	
}
function blockTitle($id){	
	$query = "SELECT `title` FROM `block_titles` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function blockSubTitle($id){
	
	$query = "SELECT `sub_title` FROM `block_titles` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function web_articles_title($id){
	
	$query = "SELECT `title` FROM `articles` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function web_article($id){
	
	$query = "SELECT `content` FROM `articles` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function blog_article_title($id){
	
	$query = "SELECT `article_title` FROM `blog` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function blog_article($id){
	
	$query = "SELECT `article` FROM `blog` WHERE `id`=?";
	dataFetch($id, $query);
		
}
function blog_article_author($id){
	
	$query = "SELECT `author` FROM `blog` WHERE `id`=?";
	dataFetch($id, $query);
		
}
function blog_article_date($id){
	
	$query = "SELECT `date_posted` FROM `blog` WHERE `id`=?";
	dataFetch($id, $query);
	
}
function latest_article($id){
		
	$query = "SELECT `id` FROM `blog` ORDER BY `id` DESC";
		
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->execute();
			$connect->bind_result($rez);	
			while($connect->fetch()){
				
				$arre[] = $rez;
				
			}
			return($arre[$id]);
			
		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
		
		echo $ex->serverConnectError();
	}
		
}
function search_nonya($key){
		
	$query = "(SELECT `title` FROM `articles` WHERE `content` LIKE ?)
	UNION
	(SELECT `article_title` FROM `blog` WHERE `article` LIKE ?)";
		
		
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
	$param = '%'.$key.'%';
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->bind_param("ss", $param,$param);
			$connect->execute();
			$connect->bind_result($rez);
				while($connect->fetch()){
					
					$arre[] = $rez;
					
				}
				return $arre;

		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
	
		return $arre[] = $ex->serverConnectError();
	}
	
}
function search_nonya1($key){
		
	$query = "(SELECT `title` FROM `articles` WHERE `content` LIKE ?)
	UNION
	(SELECT `article_title` FROM `blog` WHERE `article` LIKE ?)";
		
		
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
	$arre1 = array();
	$data = "";
	$param = '%'.$key.'%';
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			if(isset($article)){
				
				$article = $article;
				
			}else{
				
				$article = '/nova_insurance/article_display.php?id=';
			}
			$connect = $db->prepare($query);
			$connect->bind_param("ss", $param,$param);
			$connect->execute();
			$connect->bind_result($rez);
				while($connect->fetch()){
					
					$arre[] = $rez;
					
				}
			    $num = count($arre);
			    for($x=0; $x<$num; $x++){
					
					$arre1= "<a href='".$article.$arre[$x]."'>".$arre[$x]."</a><br>";
				} 
				return $arre1;

		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
	
		return $arre[] = $ex->serverConnectError();
	}
	
}
function found_article($key){
	
	$query = "(SELECT `content` FROM `articles` WHERE `title`= ?)
	UNION
	(SELECT `article` FROM `blog` WHERE `article_title`= ?)";
			
		
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->bind_param("ss", $key,$key);
			$connect->execute();
			$connect->bind_result($rez);	
			while($connect->fetch()){
				
				$arre[] = $rez;
				
			}
			return $arre[0];
			
		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
		
		echo $ex->serverConnectError();
	}
	
}
function email_check($email_address){
	
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	if(isset($email_address) && !empty($email_address)){

		try{
			
			if($db = new mysqli($server, $user, $pass, $database)){
				
					try{
						$query ="SELECT `id` FROM `news_letter_subscriptions` WHERE `email`= ? AND `active`= 1";
						
							$connect = $db->prepare($query);
							$connect->bind_param("s", $email_address);
							$connect->execute();
							$connect->bind_result($rez);
							$connect->fetch();					
							if(count($rez)==0){

								return $msg = "not subscribed"; //'not subscribed';

							}else{

								throw new newExce;
							
							}
					}catch(newExce $ex){

						return $ex->alreadySubscribed();

					}
			}else{

				throw new newExce;
			}
		}catch(newExce $ex){

			return $ex->dbConnectionError();

		}
	}else{

		return $msg= "No Email recieved";
	}
}
function news_letter_subscription($email_address){
	
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			
				try{
					  $query ="SELECT `id` FROM `news_letter_subscriptions` WHERE `email`= ? AND `active`=1";
					
						$connect = $db->prepare($query);
						$connect->bind_param("s", $email_address);
						$connect->execute();
						$connect->bind_result($rez);
						while($connect->fetch()){
							
							$arre[] = $rez;
						}
					
						if(count($arre)==0){	
							
								$query ="SELECT `id` FROM `news_letter_subscriptions` WHERE `email`= ? AND `active`=0";

								$connect = $db->prepare($query);
								$connect->bind_param("s", $email_address);
								$connect->execute();
								$connect->bind_result($rez);
								while($connect->fetch()){

									$arre[] = $rez;

								}
							    if(count($arre)==0){
									
									$query = "INSERT INTO `news_letter_subscriptions` VALUES ('', ?, '1')";
									$connect = $db->prepare($query);
									$connect->bind_param("s", $email_address);
									if($connect->execute()){

										$msg = 'You successfully subscribed for our news letter!';			
									

									}else{

										$msg = "we failed to put you in our database";
										
										//$error = new newExce;
										//$msg = $error->genericError();
									}

									
							  }else{
									$query = "UPDATE `news_letter_subscriptions` SET `active`=1 WHERE `email`=?";
									$connect = $db->prepare($query);
									$connect->bind_param("s", $email_address);
									if($connect->execute()){
										
										$msg = 'You successfully subscribed for our news letter!';			
										

									}else{

										$msg = "we failed to update you active status";
										
										//$error = new newExce;
										//$msg = $error->genericError();
									}
															
									
								}

									
						}else{
							
							throw new newExce;
						}
					
					}catch(newExce $ex){
					
						$msg = $ex->alreadySubscribed();

					}
				}
			else{

				throw new newExce;
			}
	}catch(newExce $ex){
		
		
		$msg = $ex->dbConnectionError();
		
		
	}
	
	return($msg);
}
function news_letter_unsubscription($email_address){
	
	global $server;
	global $user;
	global $pass;
	global $database;
	$arre = array();
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			
				try{
					  $query = "SELECT `id` FROM `news_letter_subscriptions` WHERE `email`= ? AND `active`=0";
					  $connect= $db->prepare($query);
					  $connect->bind_param("s", $email_address);
					  $connect->execute();
					  $connect->bind_result($id);

					 while($connect->fetch()){

						 $arre[]=$id;

					 }
						if(count($arre)==0){			
					
							try{
								$query = "SELECT `id` FROM `news_letter_subscriptions` WHERE `email`= ? AND `active`=1";
								$connect= $db->prepare($query);
								$connect->bind_param("s", $email_address);
								$connect->execute();
								$connect->bind_result($id);

								while($connect->fetch()){

									$arre[]=$id;

								}
								
								if(count($arre)>0){

									try{
										$query = "UPDATE `news_letter_subscriptions` SET `active`=0 WHERE `email`=?";
										$connect->prepare($query);
										$connect->bind_param("s", $email_address);
										
										if($connect->execute()){

											return $msg = 'You successfully unsubscribed!';			

										}else{

											throw new newExce;
										}
									}catch(newExce $ex){

										return $msg = $ex->genericError();

									}
								}else{

									throw new newExce;
								}
							}catch(newExce $ex){

								return $ex->notSubscribed();
							}
						}else{
							
							throw new newExce;
						}
					
					}catch(newExce $ex){
					
						return $ex->alreadyUnsubscribed();

					}
				}
			else{

				throw new newExce;
			}
	}catch(newExce $ex){
		
		
		return $ex->dbConnectionError();
		
		
	}
}
function testimonials(){
		
	global $server;
	global $user;
	global $pass;
	global $database;
	$query = "SELECT `testimony` FROM `testimonials` ORDER BY `id`";

	$arre = array();
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->execute();
			$connect->bind_result($rez);	
			while($connect->fetch()){
				
				$arre[] = $rez;
				
			}
			for($x=0; $x<count($arre); $x++){
				
				echo $arre[$x];
			}
			
		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
		
		echo $ex->serverConnectError();
	}
	
}
function people($cat){
	
	$type = "s";
	$query = "SELECT `info` FROM `people` WHERE `category` = ? ORDER BY `id`";
	dataFetchMulti($cat, $type, $query);	
	
}
function re_insurers($cat){
		
	$query = "SELECT `details` FROM `re_insurers` ORDER BY `id`";
	global $server;
	global $user;
	global $pass;
	global $database;
		
	try{
		
		if($db = new mysqli($server, $user, $pass, $database)){
			$connect = $db->prepare($query);
			$connect->execute();
			$connect->bind_result($rez);
			$connect->fetch();

		while($connect->fetch()){
				
				$arre[] = $rez;
				
			}
			for($x=0; $x<count($arre); $x++){
				
				echo $arre[$x];
			}
			
		}else{
			
			throw new newExce;
		}
		
	}catch(newExce $ex){
		
		echo $ex->serverConnectError();
	}
	
	
}
function selected($currentpage){
	
	global $page_name;
	
	if($page_name == $currentpage){ 
		
		 $highlight = ' current-menu-item'; 
		 echo $highlight;
	}
	
}
function sendEmail($name, $email, $website,  $message){

	if(isset($name) && isset($email) && isset($message)){
		
		$name = htmlspecialchars($name, ENT_QUOTES);
		$mail = htmlspecialchars($email, ENT_QUOTES);
		$web = htmlspecialchars($website, ENT_QUOTES);
		$our_email = 'safipromd@gmail.com';
		$message = $message. "\r<br/>".'Website: '.$web;
		$message = htmlspecialchars($message, ENT_QUOTES);
		$subject = 'RE: Safi Pro Investments';
		$headers =  'MIME-Version: 1.0'."\r<br/>"; 
		$headers .= 'From: '.$name.' '.$mail."\r<br/>";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r<br/>"; 
		
		if(!empty($name) && !empty($mail) && !empty($message)){
			
			try{
				if(@mail($our_email, $subject, $message, $headers))
					{
						$msg = 'Thank you for your feedback';

					}else{

						throw new newExce;
					}
				}catch(newExce $ex){

					$msg = $ex->emailfError();
				}
			
		}else{
			
			$msg = 'There\'s a problem with the form, sorry!';
		}

	}else{
		
		$msg = "Some elments are empty!";
	}
	return $msg;
}
function insuranceQuote($f_name, $l_name, $b_date, $email, $occupation, $d_coverage, $c_coverage, $e_date, $amount){

	global $server;
	global $user;
	global $pass;
	global $database;

	try{

		if($db = new mysqli($server, $user, $pass, $database)){

			$query = "INSERT INTO `quote_requests` VALUES('', ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$connect = $db->prepare($query);
			$connect->bind_param("ssssssssi", $f_name, $l_name, $b_date, $email, $occupation, $d_coverage, $c_coverage, $e_date, $amount);	
			try{
				
				if($connect->execute()){
					
					$us = 'info@novainsurance.co.ug';
					$success = 'You successfully requested for an Insurance quote, We will get back to you very soon.';
					$subject = 'Successful Submission of Form A';
					$message = 'Thank you for filling and submitting form A.'."\r\n".
					'Make sure to download and fill form B.'."\r\n\n".
					'This email is auto generated do not reply.';
					$headers =  'MIME-Version: 1.0'."\r\n"; 
					$headers .= 'From: '.$us."\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n"; 
					
						if(@mail($email, $subject, $message, $headers))
						{
							
							return $success = 'Your quote request was submitted successfully,<br/> and Your Email was sent successfully';

						}else{

							return $success = "Your quote request was submitted successfully, <br/> but we could not send you an email!";
						}
	
					
				}else{

					throw new newExce;			
				}
			}catch(newExce $ex){

				return $e_error = $ex->dbInsertError();
			}
		}else{
			
			throw new newExce;
		}
	}catch(newExce $ex){
		
		return $e_error = $ex->dbConnectionError();
	}
				
}
?>