<?php /* ############ SECTION FOR FEASTURED POSTS  ############ */ ?>
<section class="container homepage-heros">
<div class="row">
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
	<div class="col-sm-12 col-md-5 secondary-hero">
		<?php query_posts($query_string."&featured=yes & posts_per_page=1 & offset=1"); ?>	
		<?php while ( have_posts() ) : the_post();  ?>
		<div class="col-sm-4 col-md-12 post">
			<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('hero-thumb', array('class' => 'img-responsive')); ?>
			</figure>
			</a>
						
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
		</div>
		<?php endwhile; wp_reset_query(); ?>
		
		<?php query_posts($query_string."&featured=yes & posts_per_page=2 & offset=2"); ?>	
		<?php while ( have_posts() ) : the_post();  ?>
		<div class="col-sm-4 col-md-6 post">
			<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('hero-thumb', array('class' => 'img-responsive')); ?>
			</figure>
			</a>			
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
		</div>
		<?php endwhile; wp_reset_query(); ?>
		
	</div>
</div>
</section>