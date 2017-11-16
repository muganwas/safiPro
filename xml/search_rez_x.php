<?php require '../includes/functions.php';?>
<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF' standalone='yes' ?>";
echo "<response>";

    if(isset($_GET['search_b']) && !empty($_GET['search_b'])){

        $keys = $_GET['search_b'];
        $zaabu = search_nonya($keys);
		$msg = array();
        $num = count($zaabu);
		foreach($zaabu as $res){
			echo "<row>";
			echo $res;
			echo "</row>";
		}
        
    }else{ 

        echo "Do a secondary search";
     }
						
echo "</response>";
?>
 