<?php require '../includes/functions.php';?>
<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF' standalone='yes' ?>";
echo "<response>";

if(isset($_GET['subscribe']) && !empty($_GET['subscribe'])){
		
	$_SESSION['subscribed_add'] = htmlspecialchars(trim($_GET['subscribe']));
	$email = $_SESSION['subscribed_add'];
		
		if(news_letter_subscription($email)=='You successfully subscribed for our news letter!'){

			try{

				$subject = 'NOVA INSURANCE NEWS LETTER';
				$msg_s = 'Thank you for subscribing to our news letter, '."\r\n".
				'to unsubscribe click this link '."<a href ='https://www.novainsurance.co.ug/contact?add=".$email."'>unsubscribe</a>"."\r<br/><br/>".
				'Regards, Nova Team.';
				$headers =  'MIME-Version: 1.0'."\r\n"; 
				$headers .= 'From: info@novainsurance.co.ug'."\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n"; 


				if(@mail($email, $subject, $msg_s, $headers)){
					
					
					echo $msg = 'You successfully subscribed for our news letter!<br/>';


				}else{

					throw new newExce;

				}

			}catch(newExce $ex){

				echo 'You successfully subscribed for our news letter!', $ex->emailfError2();

			}


		}else{
	
	
			echo $msg = news_letter_subscription($email);
	
			
		}
}else{

	 echo $msg = "Email cannot be blank!";

} 
 
echo "</response>";

?>