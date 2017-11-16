<?php include 'includes/site_head.php' ?>
<main class="main-content">
				<?php include 'includes/bread_crumbs.php'; ?>
					<div class="page">
						<div class="container">
							<form action="<?php echo $search; ?>" method="POST" class="search-form">
								<input id="s_search" name="search"type="text" placeholder="Search..." required/>
								<button type="submit" >Search</button>
							</form><br/>
							<h3 class="entry-title">Search Results</h3>
							<div id="s_search_rez1"></div>
							<div id="s_search_rez"></div>
							<?php if(isset($_POST['search']) && !empty($_POST['search'])){

								$keys = htmlentities(trim($_POST['search']));
								$zaabu = search_nonya($keys);
	     						$rows = count($zaabu);

							} ?>
							<?php if(isset($_POST['search'])) { ?>
							<?php if(isset($zaabu) && !empty($zaabu)) {?>
								
								<?php for($pos=0; $pos<$rows; $pos++){

									echo '<a href="'.$article.$zaabu[$pos].'">'.$zaabu[$pos].'</a><br>';

								}?>

							<?php }else{?>
							<h3 class="entry-title">Nothing was found!</h3>
							<?php } ?>
							<?php }else{ ?> <h2>Are you searching for something?</h2><?php }?>
							
						</div>
					</div> <!-- .page -->
				</main>

			<?php include 'includes/site_footer.php';?>
		</div>

</body>
</html>