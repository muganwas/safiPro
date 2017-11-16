<?php require '../includes/functions.php';?>
<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF' standalone='yes' ?>";
echo "<response>";
			
    if(isset($_GET['subscribe']) && !empty($_GET['subscribe'])){
                
            $_SESSION['subscribed_add'] = htmlspecialchars(trim($_GET['subscribe']));
            $email = $_SESSION['subscribed_add'];
                if(email_check($email)== "not subscribed"){

                    echo "Your Email Adress: ".$email;

                }else{
            
                    echo $msg = email_check($email);
            
                    
                }


    }else{

        echo "Subscribe for news and product updates!";
    }
 
echo "</response>";

?>