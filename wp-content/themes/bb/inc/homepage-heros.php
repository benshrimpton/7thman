<?php /* ############ SECTION FOR FEASTURED POSTS  ############ */ ?>
<section class="container homepage-heros">
	<div class="row">
<!--

	<div class="col-sm-12 col-md-7 post primary-hero">
		<?php query_posts($query_string."&featured=yes & posts_per_page=1");  while ( have_posts() ) : the_post(); ?>	
		<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
			</figure>
		</a>
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
		<?php endwhile; wp_reset_query(); ?>
	</div>
-->
		<?php query_posts($query_string."&featured=yes & posts_per_page=3 & offset=0"); ?>	
		<?php while ( have_posts() ) : the_post();  ?>
		<div class="col-sm-4 col-md-4 post secondary-hero">
			<div class="inner">
			<time class="homepage-time"><? the_time();  ?> / <? the_date(); ?></time>
			<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('hero-thumb', array('class' => 'img-responsive')); ?>
			</figure>
			</a>
						
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
		</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
				
	</div>
<!--
	<aside class="col-md-4 text-center ad-unit-300-600 ad-unit">
		<div class="ad-unit-inner">
			<img src="http://placehold.it/300x600" style="display: block; margin: 0 auto;"/>
		</div>
	</aside>
-->
</div>
</section>


<section class="container homepage-heros">
	<div class="row">
		
		<div class="col-sm-12 col-md-8">
			<div class="container-fluid">
				<div class="row">
					<?php query_posts("posts_per_page=6 & offset=3"); ?>	
					<?php while ( have_posts() ) : the_post();  ?>
					<article class="col-sm-6 col-md-4 post text-center">
						<div class="inner inner-extra-wide">
						<time class="homepage-time"><? the_time();  ?> / <? the_date(); ?></time>
						<a href="<? the_permalink();?>">
						<figure class="post-thumb">
							<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
						</figure>
						</a>			
						<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
						<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
					</div>
					</article>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
		
		<aside class="col-sm-12 col-md-4 text-center ad-unit-300-600 ad-unit">
			<div class="ad-unit-inner">
				<img src="http://placehold.it/300x600" style="display: block; margin: 0 auto;"/>
			</div>
		</aside>
	
	</div>
</section>

<section class="container homepage-heros">
<figure class="text-center ad-unit-300-600 ad-unit">
<img src="http://pagead2.googlesyndication.com/pagead/imgad?id=CICAgKCTptvYWBABGAEyCGQVJgo9ldIT">
</figure>
</section>
