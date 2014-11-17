<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		
<section class="container">
		
		<h1 class="archive-title page-header text-center"><?php printf( __( 'Tag Archives: %s', 'twentytwelve' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>


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

</section>


<?php get_footer(); ?>