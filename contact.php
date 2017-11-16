<?php include 'includes/site_head.php' ?>
	<main class="main-content">
		<?php include 'includes/bread_crumbs.php'; ?>
		<div class="page">
			<div class="container">
				<?php if(!isset($_GET['add'])){ ?><div class="map"></div><?php include 'includes/fb_page.php'; ?>
				<div class="row">
					<div class="col-md-3">
						<h2 class="section-title text-left">Address</h2>

						<div class="contact-detail">
							<address>
								<p>NOVA Insurance LTD. <br>
									6, Mackinnon Road Kampala, Uganda.</p>

								<p>Phone:<br><a href="tel:+256 414 232995"> +256 414 232995</a> <br>Fax:<br>+256 414 232996
								<br>Email:<br>
									info@novainsurance.co.ug</p>
							</address>
						</div>
					</div>
					<div class="col-md-9">
						<h2 class="section-title text-left">Contact form</h2>
						<span class="msg" id="email_res"></span>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-4"><input name="name" id="u_name" type="text" placeholder="Your name..." required></div>
								<div class="col-md-4"><input name="email" id="u_email"  type="email" placeholder="Email..." required></div>
								<div class="col-md-4"><input type="text" id="u_website"  name="website" placeholder="Website..."></div>
							</div>

							<textarea name="message" id="u_message"  placeholder="Message..." required></textarea>

							<p class="text-right">
								<input type="button" class="form_button" style="width: 120px!important;" value="Send message" id="send_message" onclick="sendmail();">
							</p>
						</form>


					</div>
				</div> <?php } ?>
				<div <?php if(isset($_GET['add']))echo 'style=" display:inline-block"'; ?> class="success_un">
					<?php 
							if(isset($_GET['add'])){

								$add = $_GET['add'];

								echo $msg = news_letter_Unsubscription($add);



							} 
					?>
				</div>
			</div>
			
		</div> <!-- .page -->
	</main>
		<?php include_once('includes/site_footer.php');?>
	</div>
</body>

</html>