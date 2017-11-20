<?php include 'includes/site_head.php' ?>
<?php
	if (isset($_GET['d_coverage']) && !empty($_GET['d_coverage'])){
		
		$d_coverage = $_GET['d_coverage'];
		$_SESSION['coverage'] = $d_coverage;
	}

	if(!isset($_POST['secure']) && empty($_POST['secure'])){
		
		$_SESSION['secure'] = rand(1000, 9999);
		
	}
	else if(isset($_POST['secure']) && !empty($_POST['secure'])){
		
		$secure_u = $_POST['secure'];
		if($secure_u == $_SESSION['secure']){

				
			if(isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['b_date']) && isset($_POST['email'])){

				
				if(isset($_POST['c_coverage'])){
					
					$comb = implode('- ', $_POST['c_coverage']);
					$c_coverage = $comb;
					
				}else{

					$c_coverage = "None";
				}
				if(isset($_POST['expiry_date'])){
					
					$e_date = htmlentities(trim($_POST['expiry_date']), ENT_QUOTES);
					
				}else{

					$e_date = "None";
				}
				if(isset($_POST['amount'])){
					
					$amount = htmlentities(trim($_POST['amount']), ENT_QUOTES);
					
				}else{

					$amount = "None";
				}
				$f_name = htmlentities(trim($_POST['f_name']), ENT_QUOTES);
				$l_name = htmlentities(trim($_POST['l_name']), ENT_QUOTES);
				$b_date = htmlentities(trim($_POST['b_date']), ENT_QUOTES);
				$email = htmlentities(trim($_POST['email']), ENT_QUOTES);
				$occupation= htmlentities(trim($_POST['occupation']), ENT_QUOTES);
				$d_coverage = $_SESSION['coverage'];

				if(!empty($f_name) && !empty($l_name) && !empty($b_date) && !empty($email) && !empty($occupation) && !empty($d_coverage) && !empty($c_coverage) && !empty($e_date) && !empty($amount)){

						//function here
						$success = insuranceQuote($f_name, $l_name, $b_date, $email, $occupation, $d_coverage, $c_coverage, $e_date, $amount);	
					
				}else{
					
					$e_error = 'There\'s something wrong with the code';
				}
					
			}else{
				
				$e_error = 'Fill all the required fields!';
			}
		}else{

			$fback = "Something went wrong with the captcha!";

		}		

	}else{
	
		$fback = 'Check the form for errors<br>';
		
		$s_fback = 'Try filling in the correct figures';
		
		$_SESSION['secure'] = rand(1000, 9999);
	}

	//method for current user to end session
	if(isset($_GET['ended']) && !empty($_GET['ended'])){
		
		$ended = $_GET['ended'];
		
		if($ended = 1){
			
			session_destroy();
			header('location: insurance?cat=general');
		}
			
	}
?>		
		
<main class="main-content">
	<?php include 'includes/bread_crumbs.php'; ?>
	<?php if (!isset($_GET['d_coverage']) && !isset($_SESSION['coverage'])) {  ?>
	<?php if(isset($_GET['cat']) && ($_GET['cat'])== 'general') {?>
	<div class="header_image" <?php echo 'style="background-image: url('.$hb_image_loc."products&services".$image_ex1.' );"'; ?>>
		<div class="caption"> &#8220; Enjoy the quality, admire the value. <br/>We bring the best goods<br/> and services &#8221;</div>
	</div>
	<div class="insurance_categories">
			<a href="products and services.php?cat=agro" class="button">Agro Produce</a>
			<a href="products and services.php?cat=diversified" class="button">Diversified Services</a>
	</div>
	<div class="page">
	<div class="container">
	
		
			<h3 class="entry-title1"><?php web_articles_title(12); ?></h3>
			<?php web_article(12); ?>
			<?php } else if(isset($_GET['cat']) && ($_GET['cat']=='agro' || $_GET['cat'] == 'diversified')) { ?>
				<div class="header_image" <?php echo 'style="background-image: url('.$hb_image_loc.$_GET['cat'].$image_ex1.' );"'; ?>>
					<div class="caption1"><strong><?php echo $_GET['cat'].' ';blockSubTitle(6); ?></strong></div>
				</div>
			<div class="page">
			<div class="container">
				<div>
					<h3>PRODUCTS:</h3>
					<p>These include Rice, wheat ﬂ our, maize ﬂ our , Ground nuts, Beans, salt, cooking oil,
					 sugar, and various consumer goods to mention but a few.
					  We are a one stop shopping center for all consumable goods.</p>
				</div>
			</div><?php } ?>
		
		<?php } else if(isset($_GET['d_coverage']) || isset($_SESSION['coverage'])){?>
			<div class="quote_form">
				<?php include 'includes/insurance_quote.php';?>
			</div>
		<?php } ?>
		</div>
	</div> <!-- .page -->
</main>
			
	<?php include'includes/site_footer.php';?>
</div>

</body>

</html>