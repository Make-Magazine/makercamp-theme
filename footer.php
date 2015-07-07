<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Maker Camp Theme
 */
?>

<!-- /container -->

<footer id="footer" class="uni-footer">
	<div class="container-fluid">
		<div class="row social-foot-desktop hidden-xs">
			<div class="col-sm-12 col-sm-6 col-sm-3 social-foot-col">
				<a href="/"><img class="footer_logo" src="http://1abxf1rh6g01lhm2riyrt55k.wpengine.netdna-cdn.com/wp-content/themes/makeblog/img/make-logo.png"  alt="Make Logo"></a>
				<ul class="list-unstyled">
					<li><a href="//www.pubservice.com/MK/subscribe.aspx?PC=MK&PK=M3AMZB" target="_blank">Subscribe to Make:</a>
					</li>
					<li><a href="//makezine.com/projects">Make: Projects</a></li>
					<li><a href="//makezine.com/category/workshop/3d-printing-workshop/">3D Projects</a></li>
					<li><a href="//makezine.com/category/electronics/arduino/">Arduino Projects</a></li>
					<li><a href="https://help.makercamp.com/hc/en-us">Maker Camp Help Page</a></li>
				</ul>
			</div>

			<div class="col-sm-12 col-sm-6 col-sm-3 social-foot-col">
				<h4>Explore Making</h4>
				<ul class="list-unstyled">
					<li><a href="//makezine.com/blog" target="_blank">Make: News</a></li>
					<li><a href="//makerfaire.com">Maker Faire</a></li>
					<li><a href="//www.makershed.com" target="_blank">Maker Shed</a></li>
					<li><a href="//makercon.com" target="_blank">MakerCon</a></li>
					<li><a href="//makercamp.com" target="_blank">Maker Camp</a></li>
				</ul>
			</div>
			<div class="col-sm-12 col-sm-6 col-sm-3 social-foot-col">
				<h4>Our Company</h4>
				<ul class="list-unstyled">
					<li><a href="//makermedia.com" target="_blank">About Us</a></li>
					<li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
					<li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
					<li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
					<li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
				</ul>
			</div>

			<div class="col-sm-12 col-sm-6 col-sm-3 social-foot-col">
				<h4 class="stay-connected">Stay Connected</h4>

				<div class="social-profile-icons">
					<a class="sprite-facebook-32" href="//www.facebook.com/makemagazine?_rdr" title="Facebook" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-twitter-32" href="//twitter.com/make" title="Twitter" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-pinterest-32" href="//pinterest.com/makemagazine/" title="Pinterest" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-googleplus-32" href="//plus.google.com/communities/107377046073638428310" rel="publisher"
					   title="Google+" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
				</div>
<!--				TODO: decide what to do with php-->
				<?php
//    <!--$isSecure = "http://";-->
//    <!--if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {-->
//    <!--$isSecure = "https://";-->
//    <!--}-->
//    ?>
				<form action="http://whatcounts.com/bin/listctrl" method="POST">
					<input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43"/>
					<input type="hidden" name="cmd" value="subscribe"/>
					<input type="hidden" name="custom_source" value="footer"/>
					<input type="hidden" name="custom_incentive" value="none"/>
					<input type="hidden" name="custom_url" value="<?php echo $_SERVER[" HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>"/>
					<input type="hidden" id="format_mime" name="format" value="mime"/>
					<input type="hidden" name="goto" value=""/>
					<input type="hidden" name="custom_host" value="<?php echo $_SERVER[" HTTP_HOST"]; ?>" />
					<input type="hidden" name="errors_to" value=""/>

					<div>
						<input name="email" placeholder="Enter your Email" required="required" type="text"><br>
						<input value="Sign Up for our Newsletter" class="btn-cyan" type="submit">
					</div>
				</form>
			</div>
		</div>
		<!-- END desktop row -->
		<!-- Add back in when the site is responsive -->
		<div class="row social-foot-mobile visible-xs-block">
			<div class="col-xs-12 social-foot-col">
				<h4 class="stay-connected">Stay Connected</h4>

				<div class="social-profile-icons">
					<a class="sprite-facebook-32" href="//www.facebook.com/makemagazine?_rdr" title="Facebook" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-twitter-32" href="//twitter.com/make" title="Twitter" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-pinterest-32" href="//pinterest.com/makemagazine/" title="Pinterest" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
					<a class="sprite-googleplus-32" href="//plus.google.com/communities/107377046073638428310" rel="publisher"
					   title="Google+" target="_blank">
						<div class="social-profile-cont">
							<span class="sprite"></span>
						</div>
					</a>
				</div>
<!--				--><?php //$isSecure = "http://";
//    				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
//						$isSecure = "https://";
//					} ?>
				<form action="http://whatcounts.com/bin/listctrl" method="POST">
					<input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43"/>
					<input type="hidden" name="cmd" value="subscribe"/>
					<input type="hidden" name="custom_source" value="footer"/>
					<input type="hidden" name="custom_incentive" value="none"/>
					<input type="hidden" name="custom_url" value="<?php echo $_SERVER[" HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
					<input type="hidden" id="format_mime" name="format" value="mime"/>
					<input type="hidden" name="goto" value=""/>
					<input type="hidden" name="custom_host" value="<?php echo $_SERVER[" HTTP_HOST"]; ?>" />
					<input type="hidden" name="errors_to" value=""/>

					<div>
						<input name="email" placeholder="Enter your Email" required="required" type="text"><br>
						<input value="Sign Up for our Newsletter" class="btn-cyan" type="submit">
					</div>
				</form>
			</div>
			<div class="col-xs-12 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false"
							   aria-controls="collapse1">Make:</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="//www.pubservice.com/MK/subscribe.aspx?PC=MK&PK=M3AMZB" target="_blank">Subscribe to
										Make:</a></li>
								<li><a href="//makezine.com/projects">Make: Projects</a></li>
								<li><a href="//makezine.com/category/workshop/3d-printing-workshop/">3D Projects</a></li>
								<li><a href="//makezine.com/category/electronics/arduino/">Arduino Projects</a></li>
								<li><a href="https://help.makercamp.com/hc/en-us">Maker Camp Help Page</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false"
							   aria-controls="collapse2">Explore Making</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="//makezine.com/blog" target="_blank">Make: News</a></li>
								<li><a href="//makerfaire.com">Maker Faire</a></li>
								<li><a href="//www.makershed.com" target="_blank">Maker Shed</a></li>
								<li><a href="//makercon.com" target="_blank">MakerCon</a></li>
								<li><a href="//makercamp.com" target="_blank">Maker Camp</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading3">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
							   aria-controls="collapse3">Our Company</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="//makermedia.com" target="_blank">About Us</a></li>
								<li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
								<li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
								<li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
								<li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End social-foot-mobile -->
	</div>
	<!-- END container -->
    <div class="copyright">
        <p>Make: and Maker Camp are registered trademarks of Maker Media, Inc.</p>
        <p>Copyright © 2004-2015 Maker Media, Inc. All rights reserved</p>
    </div>
</footer>
<!-- END new-footer -->

    </div> <!-- /container -->

<?php wp_footer(); ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51157-25', 'auto');
	ga('require', 'displayfeatures');
	ga('send', 'pageview', {
		'page': location.pathname + location.search + location.hash
	});
</script>
<script>
	var _prum = [['id', '53fcea2fabe53d341d4ae0eb'],
		['mark', 'firstbyte', (new Date()).getTime()]];
	(function() {
		var s = document.getElementsByTagName('script')[0]
			, p = document.createElement('script');
		p.async = 'async';
		p.src = '//rum-static.pingdom.net/prum.min.js';
		s.parentNode.insertBefore(p, s);
	})();
</script>
</body>
</html>

