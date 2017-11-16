<?php require '../includes/functions.php';?>
<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF' standalone='yes' ?>";
echo "<response>";

if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['message'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    if(isset($_GET['website']))
        $website = $_GET['website'];
    else
        $website = "None";
    echo $msg = sendEmail($name, $email, $website, $message);
}else{

    echo "nothing was set";
}
 
echo "</response>";

?>