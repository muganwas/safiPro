<?php require '../includes/functions.php';?>
<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF' standalone='yes' ?>";
echo "<response>";

    if(isset($_POST['search_b']) && !empty($_POST['search_b'])){

        $keys = $_POST['search_b'];
        $zaabu = search_nonya($keys);
		$msg = array();
        $num = count($zaabu);
		foreach($zaabu as $res){
			echo $res;
		}
        
    }else{ 

        echo "Do a secondary search";
     }
						
echo "</response>";
?>
 