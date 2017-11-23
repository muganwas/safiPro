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
						<div class="container">
							<h3>CLIENTS:</h3>
							<p>
							Saﬁ pro Investments Uganda Ltd has established a loyal customer base which has been achieved through the following:<br/>
							•  Aggressive Marketing <br/>
							•  Dedicated Customer Service<br/>
							•  Customer Satisfaction.<br/>
							•  Competitive Pricing <br/>
							•  Quality Products <br/>
							•  Reliable Transportation <br/>
							•  Timely Product Delivery<br/>
							We do supply top supermarkets, Hotels, Retail and wholesaler shops to mention but a few.
							</p> 
							<h3>
							MARKETS:</h3>
							<p>
							The passionate and professional approach of each business unit, together with the Marketing Department, ensures that all produce goods and varieties and brands reach their full potential. Our market is comprised of both retailers and wholesalers in the country and those who export to other countries.
							New emerging markets like that of Southern Sudan have also opened up following the recent acceptanceof South Sudan in to the East African regional cooperation Agreement and we are now exporting their.
							MARKETING: Our Marketing Team are able to offer weekly updates on what's happening in store, research groups, collect data, offer in-store sampling and much more. We have a professional marketing team in place.
							Our team has used radio and reference accounting. In the latter, satisﬁed customers refer friends to our company for reliable supplies. Our client base is growing day after day.
							We have a well qualiﬁed marketing team that is ready to handle any assignment given to them when called upon at any time. We are always their whenever you need us.
							Introducing new products and marketing them is one of our priorities and Saﬁ Pro Investments Uganda limited being a House hold name is an advantage to our marketing strategies.
							</p>
							<h3>STRATEGIC MARKETING:</h3>
							<p></p>
							This is one of the main ﬁelds of our Professional expertise. Marketing presents a major constraint in Uganda just as it iswith many other African countries. We try to bridge the gap by providing information to our clients to access products in the available markets. 
							</p>
							<h3>TRANSORTATION:</h3>
							<p>
							The timely delivery of products to the client base is crucial in ensuring uninterrupted supply to the Entrepreneur and subsequently the end user. The products are transported by road and as the railway system gets revamped, we hope to utilize this as an alternative mode of transport for bulk purchases.</p>
							<h3>DISTRIBUTION:</h3> 
							<p>We are committed to being the convenience warehouse store and route trade marketing and distribution leader. The business aims to provide a one stop shop and total supply solution to the convenience and route trade channel. We target the customers who have larger stores, place orders electronically and require regular, scheduled deliveries also providing critical purchase reports to help customers identify their buying trends.
							The company has opened up various outlets throughout most parts of the country and has its agents stationed in various places
							</p>
							<div>
								<img class="trucks" src="images/trucks/truck1.jpg"/>
								<img class="trucks" src="images/trucks/truck2.jpg"/>
								<img class="trucks"src="images/trucks/truck3.jpg"/>
								<img class="trucks"src="images/trucks/truck7.jpg"/>
								<img class="trucks" src="images/warehouse/warehouse1.jpg"/>
								<img class="trucks" src="images/warehouse/warehouse2.jpg"/>
								<img class="trucks"src="images/warehouse/warehouse3.jpg"/>
								<img class="trucks"src="images/warehouse/warehouse4.jpg"/>
								<div class="clear"></div>
								<br/>
							</div>
							<h3>PARTNERSHIPS:</h3> 
							<p>Given the high demand of Rice here, our experience and concrete market contacts here and in the region, we would seek to partner with foreign companies to represent them here as their marketing agents for Rice on favourable terms and conditions to be agreed on. We invite you to contact us for business partnerships. We shall deliver to your utter satisfaction and in good time too.
							</p>
							<div class="partnership"><img src="images/friendship.jpg"/>
								<h3>TOGETHER WE CAN THANK YOU VERY MUCH </h3>
							</div>
						</div>
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