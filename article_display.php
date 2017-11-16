<?php include 'includes/site_head.php' ?>
			<main class="main-content">
				<?php include 'includes/bread_crumbs.php'; ?>
					<div class="page">
						<div class="container">

							<?php if(isset($_GET['id']) && !empty($_GET['id'])){

								$keys = $_GET['id'];
								
							} ?>
							<?php if(isset($_GET['id'])){ ?>
							<?php if(isset($keys)) {?>
								<h3 class="entry-title"><?php echo $_GET['id'] ?></h3>
								
								<?php echo found_article($keys); ?>

							<?php }else{?>
							<h3 class="entry-title">No Article Available</h3>
							<?php } ?>
							<?php }else{ ?> <h2>Are you searching for something?</h2><?php }?>
						</div>
					</div> <!-- .page -->
				</main>

			<?php include 'includes/site_footer.php';?>
		</div>

</body>

</html>