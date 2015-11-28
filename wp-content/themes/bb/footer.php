<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</main>

<footer class="main-footer container-fluid">
<div class="container">
	<div class="row footer-col-wrap">
	
		<section class="col-md-4 text-left">
			<ul>
				<li><a href="/about">About</a></li>
				<li><a href="/advertising">Advertising</a></li>
				<li><a href="/contact">Contacts</a></li>
			</ul>
		</section>
		
		
		<section class="col-md-4">
			<ul class="social">
				<li><a href="https://www.facebook.com/7thman" target="_blank" title="Follow on Facebook">Facebook</a></li>
				<li><a href="http://instagram.com/7thmanmagazine" target="_blank" title="Follow on Instagram">Instagram</a></li>
				<li><a href="https://twitter.com/7thmanmagazine"  target="_blank" title="Follow on Twitter">Twitter</a></li>
			</ul>			
		</section>
		
		
		<section class="col-md-4 text-left">
			<div id="mc_embed_signup">
			<form action="//7thmanmagazine.us2.list-manage.com/subscribe/post-json?u=0668f78ed632408588d6a9d9b&amp;id=a01f694a8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form" target="_blank" novalidate>
							
					<div class="control-group">
						<label class="">Subscribe to newsletter</label>
						<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">
					</div>
					
					<div class="response mc-response" id="mce-error-response" style="display:none"></div>
					<div class="response mc-response" id="mce-success-response" style="display:none"></div>
				</form>
			</div>
		</section>
	
	
	</div>
	



	
	</div><!-- end container -->
	
	<section class="copyright text-center">
		
		<small class="">&copy; Copyright SoFarSoGood</small>
	</section>
	
</footer><!-- #colophon -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/bootstrap.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/masonry.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
        
        

<?php wp_footer(); ?>
</body>
</html>

