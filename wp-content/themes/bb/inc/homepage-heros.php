<?php /* ############ SECTION FOR FEASTURED POSTS  ############ */ ?>
<section class="container homepage-heros">
	<div class="row">
		<?php query_posts($query_string."&featured=yes & posts_per_page=3 & offset=0, cat=-19,-21"); ?>	
		<?php while ( have_posts() ) : the_post();  ?>
		<div class="col-sm-4 col-md-4 post secondary-hero">
			<div class="inner">
			<time class="homepage-time"><? the_time();  ?> / <? the_date(); ?></time>
			<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('hero-thumb-large', array('class' => 'img-responsive')); ?>
			</figure>
			</a>
						
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
		</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
				
	</div>
</div>
</section>


<section class="container homepage-heros secondary-row">
	<div class="row">
	<?php query_posts("posts_per_page=8 & offset=3"); ?>	
	<?php while ( have_posts() ) : the_post();  ?>
	<article class="col-xs-6 col-sm-4 col-md-3 post text-center">
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
</section>

<section class="container homepage-heros">
<figure class="text-center ad-unit-300-600 ad-unit">
<a href="http://click.linksynergy.com/fs-bin/click?id=eFh*M/OWx7I&offerid=280007.137&subid=0&type=4"><IMG border="0"   alt="Burberry Ltd" src="http://ad.linksynergy.com/fs-bin/show?id=eFh*M/OWx7I&bids=280007.137&subid=0&type=4&gridnum=0"></a></figure>
</section>
