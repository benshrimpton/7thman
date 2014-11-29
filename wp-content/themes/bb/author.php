<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>

			<?php
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>
			<header class=" container">
			<div class="archive-header page-header text-center">
				<h1 class="archive-title">Posts by <span>'<?php the_author_firstname(); ?> <?php the_author_lastname(); ?>'</span></h1>
			</div>
			</header><!-- .archive-header -->

			<?php
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

			<? endif; ?>
			
<section class="container">
				
	<div class="row">
	
		<?php while ( have_posts() ) : the_post();  ?>
			
				<article class="col-sm-3 col-md-2 post text-center">
				
					<a href="<? the_permalink();?>">
					<figure class="post-thumb">
						<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
					</figure>
					</a>
		
					<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
				
					<?php //the_excerpt(); ?>
					
					<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
						
				</article>
					
			<?php endwhile;  ?>


	</div>
</section>
	

<?php get_footer(); ?>