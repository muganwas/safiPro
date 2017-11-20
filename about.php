<?php include 'includes/site_head.php' ?>
			<main class="main-content">
				<?php include 'includes/bread_crumbs.php'; ?>
				<?php if(isset($_GET['cat']) && ($_GET['cat']=='general')) { ?>
				<div class="header_image" <?php echo 'style="background-image: url('.$hb_image_loc.$page_name_temp.$image_ex1.' );"'; ?>>
					<div class="caption"> &#8220; We aspire to be a World Class Provider of quality agricultural produce to all our clients and to offer quality services &#8221;</div>
				</div>
				<div class="page">
					
						<div class="container">
							<h1 class="entry-title"><?php web_articles_title(5); ?></h1>
							<p><?php web_article(5); ?></p>
							
							<div class="features">
								<div class="feature-numbered"> 
									
									<h2 class="feature-title"><?php web_articles_title(6); ?></h2>
									<p><?php web_article(6); ?></p>
								</div>
								<div class="feature-numbered">
									
									<h2 class="feature-title"><?php web_articles_title(7); ?></h2>
									<p><?php web_article(7); ?></p>
								</div>
								<div class="feature-numbered">
									
									<h2 class="feature-title"><?php web_articles_title(8); ?></h2>
									<p><?php web_article(8); ?></p>
								</div>
								<div class="feature-numbered">
									
									<h2 class="feature-title"><?php web_articles_title(9); ?></h2>
									<p><?php web_article(9); ?></p>
								</div>
								<div class="feature-numbered">
									
									<h2 class="feature-title"><?php web_articles_title(10); ?></h2>
									<?php web_article(10); ?>
								</div>
							</div>
						</div> <!-- .container -->
					

					<div class="fullwidth-block" data-bg-color="#f1f1f1">
						<div class="container">
							<h2 class="section-title"><?php web_articles_title(11); ?></h2>
							<?php web_article(11); ?>
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
					<?php }  else if(isset($_GET['cat']) && ($_GET['cat']=='management')) { ?>

					<div class="fullwidth-block">
						<div class="container">
							<h2 class="section-title"><?php blockTitle(5); ?></h2>

							<div class="row">
								<span class="mgt_dits">
								<h3>OUR MANAGEMENT TEAM:</h3> 
								 <p>Our management team has an average of 15 years of domestic and international trading experience which explains the steady rise in turn-over.</p>
								</span>
								<?php 
									$category = htmlentities($_GET['cat']);
									people($category);
								 ?>
								 
								 
								
							</div> <!-- .row -->
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
					<?php } else if(isset($_GET['cat']) && ($_GET['cat']=='board')) { ?>
					<div class="fullwidth-block">
						<div class="container">
							<h2 class="section-title"><?php blockTitle(9); ?></h2>

							<div class="row">
												
								<?php
									$category = htmlentities($_GET['cat']);
									people($category); 
								 ?>
								
							</div> <!-- .row -->
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
					<?php } else if(isset($_GET['cat']) && ($_GET['cat']=='career')){ ?>
					<div class="career">Coming soon...</div>
					<?php }  else if(isset($_GET['cat']) && ($_GET['cat']=='re-ins')){ ?>
					<div class="fullwidth-block">
						<div class="container">
							<h2 class="section-title"><?php blockTitle(10); ?></h2>

							<div class="row">
									
								<?php 
									$category = htmlentities($_GET['cat']);
									re_insurers($category); 
								?>
								
							</div> <!-- .row -->
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
					<?php } ?>
				</div> <!-- .page -->
			</main>
			<?php include'includes/site_footer.php';?>
		</div>
	</body>

</html>