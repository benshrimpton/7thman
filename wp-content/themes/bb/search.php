<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="container">
	<div class="row">
	
		<h1 class="page-header text-center">
		<?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>

	<?php if ( have_posts() ) : ?>
	
	
	
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<article class="col-sm-4 post">
			
					<a href="<? the_permalink();?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>

					<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
				
					<?php the_excerpt(); ?>
					
					<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
					
			</article>
			
			
		<?php endwhile; ?>
	
	
	<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>