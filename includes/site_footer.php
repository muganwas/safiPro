<div class="site-footer">
	<div class="news_letter" id="news_letter">
	<div class="msg_header" id="sub_res"></div>
	<div class="msg" id="sub_res1"><?php //if(isset($msg)){echo $msg;} ?></div>
		<form>	
			<input type="email" name="subscribe" id="sub_email" required/>
			<input type="button" name="submit" onclick="submitted();" value="Subscribe"/>
		</form> 
	</div>
		<div class="widget-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-2" id="reduced">
						<div class="widget">
							<h3 class="widget-title">Contact</h3>
							<address> Nova Insurance Company LTD. 6, Mackinnon Road Kampala, Uganda.
							</address>
							Phone:<br><a href="tel:+256 414 232995"> +256 414 232995</a> <br>Fax:<br>+256 414 232996<br>
							Email:<br>
							<a href="mailto:info@novainsurance.co.ug">info@novainsurance.co.ug</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2" id="reduced">
						<div class="widget">
							<h3 class="widget-title">Company</h3>
							<ul class="no-bullet">
								<li><a href="<?php echo $root_folder.'about'.'?cat=general'; ?>">About us</a></li>
								<li><a href="<?php echo $root_folder.'about'.'?cat=career'; ?>"><li id="sub_item">Career</li></a></li>
								<li><a href="<?php echo $root_folder.'about'.'?cat=management'; ?>">Management</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2" id="reduced">
						<div class="widget">
							<h3 class="widget-title">Products</h3>
							<ul class="no-bullet">
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>#factory">Factory insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=individual'; ?>#home">Home insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=individual'; ?>#motor">Motor insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>#business">Business insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>#contractor">Investment insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>#cargo">Cargo insurance</a></li>
								<li><a href="<?php echo $root_folder.'insurance'.'?cat=business'; ?>#business">Employer liability insurance</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2" id="reduced">
						<div class="widget">
							<h3 class="widget-title">Misc</h3>
							<ul class="no-bullet">
								<li><a href="<?php echo $root_folder.'about'.'?cat=re-ins'; ?>">Our Re-insurers</a></li>
							
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2" id="reduced">
						<div class="widget">
							<h3 class="widget-title">Resources</h3>
							<ul class="no-bullet">
								<li><a href="<?php echo $root_folder.'resources'; ?>">Documents</a></li>
								<li><a href="<?php echo $root_folder.'nova_sitemap.xml'?>">Site Map</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bottom-footer">
			<div class="container">
				<nav class="footer-navigation">
					<a href="<?php echo $root_folder; ?>">Home</a>
					<a href="<?php echo $root_folder.'about'.'?cat=general'; ?>">About us</a>
					<a href="<?php echo $root_folder.'insurance'.'?cat=general'; ?>">Insurance plans</a>
					<a href="<?php echo $root_folder.'blog'; ?>">Our Blog</a>
					<a href="<?php echo $root_folder.'resources'; ?>">Resources</a>
					<a href="<?php echo $root_folder.'contact'; ?>">Contact</a>
				</nav>

				<div class="colophon">&copy;2017 Nova Insurance. <?php realness(); ?> . All rights reserved.</div>
			</div>
		</div>
	</div>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>	
	</div>
</body>
</html>		
		
		