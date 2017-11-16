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
	<div class="header_image" <?php echo 'style="background-image: url('.$hb_image_loc.$page_name_temp.$image_ex2.' );"'; ?>>
		<div class="caption"> &#8220; Always here when you need us most &#8221;</div>
	</div>
	<div class="insurance_categories">
			<a href="insurance.php?cat=individual" class="button">Individual Insurance</a>
			<a href="insurance.php?cat=corporate" class="button">Business Insurance</a>
	</div>
	<div class="page">
	<div class="container">
	
		
			<h3 class="entry-title1"><?php web_articles_title(12); ?></h3>
			<?php web_article(12); ?>
			<?php } else if(isset($_GET['cat']) && ($_GET['cat']=='individual' || $_GET['cat'] == 'business')) { ?>
				<div class="header_image" <?php echo 'style="background-image: url('.$hb_image_loc.$_GET['cat'].$image_ex2.' );"'; ?>>
					<div class="caption1"><strong><?php echo $_GET['cat'].' ';blockSubTitle(6); ?></strong></div>
				</div>
			<div class="page">
			<div class="container">

			<div class="filterable-items" >
				<div class="insurance-item filterable-item " id="1">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-sunshine"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(13); ?></h3>
						<p><?php web_article(13); ?></p>
						<a href="insurance.php?d_coverage=Fire and special perils" class="button">Get a quote</a>
					</div>
				</div>
			

				<div class="insurance-item filterable-item " id="2">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-man-expand"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(14); ?></h3>
						<p><?php web_article(14); ?></p>
						<a href="insurance.php?d_coverage=Burglary" class="button">Get a quote</a>
					</div>
				</div>

				<div class="insurance-item filterable-item " id="3">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-boat"></i></div>
						<h3 class="insurance-title" id="cargo"><?php web_articles_title(15); ?></h3>
						<p><?php web_article(15); ?></p>
						<a href="insurance.php?d_coverage=Goods in transit" class="button">Get a quote</a>
					</div>
				</div>

				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="4">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-cheque"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(16); ?></h3>
						<p><?php web_article(16); ?></p>
						<a href="insurance.php?d_coverage=Money" class="button">Get a quote</a>
					</div>
				</div>

				<div class="insurance-item filterable-item " id="5">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-weigher"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(17); ?></h3>
						<p><?php web_article(17); ?></p>
						<a href="insurance.php?d_coverage=All Risk" class="button">Get a quote</a>
					</div>
				</div>

				<div class="insurance-item filterable-item " id="6">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-car"></i></div>
						<h3 class="insurance-title" id="motor"><?php web_articles_title(18); ?></h3>
						<p><?php web_article(18); ?></p>
						<a href="insurance.php?d_coverage=Motor" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="7">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-man-circle"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(19); ?></h3>
						<p><?php web_article(19); ?></p>
						<a href="insurance.php?d_coverage=Group Personal Accident" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="7">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-man-time"></i></div>
						<h3 class="insurance-title" id="business"><?php web_articles_title(20); ?></h3>
						<p><?php web_article(20); ?></p>
						<a href="insurance.php?d_coverage=Employer liability" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="8">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-elevator"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(21); ?></h3>
						<?php web_article(21); ?>
						<a href="insurance.php?d_coverage=Electronic Equipment" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="9">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-home"></i></div>
						<h3 class="insurance-title" id="home"><?php web_articles_title(22); ?></h3>
						<p><?php web_article(22); ?></p>
						<a href="insurance.php?d_coverage=Domestic package" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="10">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-wallet"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(23); ?></h3>
						<p><?php web_article(23); ?></p>
						<a href="insurance.php?d_coverage=Fidelity Guarantee" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="11">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-peoples"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(24); ?></h3>
						<p><?php web_article(24); ?></p>
						<a href="insurance.php?d_coverage=Public Liability" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="12">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-cash-machine"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(25); ?></h3>
						<p><?php web_article(25); ?></p>
						<a href="insurance.php?d_coverage=Plant & Machinery" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="13">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-peoples"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(26); ?></h3>
						<p><?php web_article(26); ?></p>
						<a href="insurance.php?d_coverage=Professional Indemnity" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="14">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-window"></i></div>
						<h3 class="insurance-title" id="contractor"><?php web_articles_title(31); ?></h3>
						<p><?php web_article(31); ?></p>
						<a href="insurance.php?d_coverage=Contractors All Risk" class="button">Get a quote</a>
					</div>
				</div>
				<div <?php if($_GET['cat']=='individual')echo 'style=" display:none"'; ?> class="insurance-item filterable-item " id="15">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-window"></i></div>
						<h3 class="insurance-title" id="factory"><?php web_articles_title(27); ?></h3>
						<p><?php web_article(27); ?></p>
						<a href="insurance.php?d_coverage=Contractors Plant and machinery" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="15">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-broken-glass"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(28); ?></h3>
						<p><?php web_article(28); ?></p>
						<a href="insurance.php?d_coverage=Plate Glass" class="button">Get a quote</a>
					</div>
				</div>
				<div class="insurance-item filterable-item " id="16">
					<div class="insurance-content1">
						<div class="insurance-icon"><i class="icon-bank"></i></div>
						<h3 class="insurance-title"><?php web_articles_title(29); ?></h3>
						<?php web_article(29); ?>
						<a href="insurance.php?d_coverage=Bonds" class="button">Get a quote</a>
					</div>
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