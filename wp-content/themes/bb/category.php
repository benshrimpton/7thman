<?php get_header(); ?>


<section class="container">


	<div class="page-header text-center">
		<h1><?php single_cat_title(); ?></h1>
	</div>
				
				
	<div class="row" id="masonize-me">
	
		<?php while ( have_posts() ) : the_post();  ?>
			
				<article class="col-sm-6 col-md-3 post">
				
					<a href="<? the_permalink();?>">
					<figure class="post-thumb">
						<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
					</figure>
					</a>
		
					<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
				
					<?php the_excerpt(); ?>
					
					<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
						
				</article>
					
			<?php endwhile;  ?>

	</div>
</section>
<?php get_footer(); ?>