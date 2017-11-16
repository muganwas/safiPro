						<div class="container">
							<h2 class="section-title">Latest Posts</h2>
							<div class="row news-list">
								<div class="col-md-4">
									<div class="news">
									<?php  $id1 = latest_article(0); ?>
										<figure><img src="<?php echo $blog_images;blog_article_title($id1);echo $image_ex1; ?>" alt="<?php blog_article_title($id1); ?>"></figure>
										<div class="date"><!-- effect to follow pointer on hover is in app.js --><img src="images/icon-calendar1.png" alt=""><?php blog_article_date($id1); ?></div>
										<h2 class="entry-title"><a href="<?php echo $article;blog_article_title($id1); ?>"><?php blog_article_title($id1); ?></a></h2>
									</div>
								</div>
								<div class="col-md-4">
									<div class="news">
									<?php  $id1 = latest_article(1); ?>
										<figure><img src="<?php echo $blog_images;blog_article_title($id1);echo $image_ex1; ?>" alt="<?php blog_article_title($id1); ?>"></figure>
										<div class="date"><!-- effect to follow pointer on hover is in app.js --><img src="images/icon-calendar1.png" alt=""><?php blog_article_date($id1); ?></div>
										<h2 class="entry-title"><a href="<?php echo $article;blog_article_title($id1); ?>"><?php blog_article_title($id1); ?></a></h2>
									</div>
								</div>
								<div class="col-md-4">
									<div class="news">
									<?php  $id1 = latest_article(2); ?>
										<figure><img src="<?php echo $blog_images;blog_article_title($id1);echo $image_ex1; ?>" alt="<?php blog_article_title($id1); ?>"></figure>
										<div class="date"><!-- effect to follow pointer on hover is in app.js --><img src="images/icon-calendar1.png" alt=""><?php blog_article_date($id1); ?></div>
										<h2 class="entry-title"><a href="<?php echo $article;blog_article_title($id1); ?>"><?php blog_article_title($id1); ?></a></h2>
									</div>
								</div>
							</div> <!-- .row -->
						</div> <!-- .container -->