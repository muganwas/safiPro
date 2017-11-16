<header class="site-header">
	<div class="top-header">
		<div class="container">
			<a href="<?php echo $root_folder?>" id="branding">
				<img src="<?php echo $image_loc1.$logo_name; ?>" alt="<?php echo $site_name; ?>" class="logo">
				<div class="logo-text">
					<h1 class="site-title">Nova Insurance</h1>
					<small class="description">Now You're In Safe Hands</small>
				</div>
			</a> <!-- #branding -->

			<div class="right-section pull-right">
				<a href="<?php echo $root_folder.'contact'; ?>" class="phone">Contact Us</a>&nbsp;
				<a href="tel:+256776001022" class="phone">+256 776001022</a>

				<form action="<?php echo $search; ?>" method="POST" class="search-form">
					<input name="search"type="text" placeholder="Search..." required/>
					<button type="submit"><img src="images/icon-search.png" alt=""></button>
				</form>
			</div>
		</div> <!-- .container -->
	</div> <!-- .top-header -->

	<div class="bottom-header-top"></div>
	<div class="bottom-header">
		<div class="container">
			<div class="main-navigation">
				<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
				<ul class="menu">
				
					<li class="menu-item<?php selected('About'); ?>"><a href="<?php echo $root_folder.'about'.'?cat=general'; ?>">About us</a>
							<ul>
								<a href="<?php echo $root_folder.'about'.'?cat=management'; ?>"><li id="sub_item">Management</li></a>
								<a href="<?php echo $root_folder.'about'.'?cat=board'; ?>"><li id="sub_item">Board of Directors</li></a>
								<a href="<?php echo $root_folder.'about'.'?cat=career'; ?>"><li id="sub_item">Career</li></a>
							</ul>
					</li>							
					<li class="menu-item<?php selected('Insurance'); ?>"><a href="<?php echo $root_folder.'insurance'.'?cat=general'; ?>">Our Products</a>
					
						<ul>
							<a href="<?php echo $root_folder.'insurance'.'?cat=individual'; ?>"><li id="sub_item">Agro Produce</li></a>
							<a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>"><li id="sub_item">Diversified Products</li></a>
						</ul>
					
					</li>
					<li class="menu-item<?php selected('Downloads'); ?>"><a href="<?php echo $root_folder.'downloads'; ?>">Our Suppliers</a></li>
					<li class="menu-item<?php selected('Contact'); ?>"><a href="<?php echo $root_folder.'contact'; ?>">Contact</a></li>
				</ul> <!-- .menu -->
			</div> <!-- .main-navigation -->

			<div class="social-links">
				<a href="https://www.facebook.com/novainsuranceug"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
			</div>

			<div class="mobile-navigation"></div>
		</div>
	</div>
</header> <!-- .site-header -->