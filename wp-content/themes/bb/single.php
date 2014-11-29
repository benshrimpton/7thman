<? get_header(); ?>

<?php
global $post;
$categories = get_the_category($post->ID);
?>

<section class="container single-post-wrapper text-center">

			<?php if ( have_posts() ) : ?>
							
				<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
				
					<figure class="single-post-hero">
					<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
					</figure>
				
					<header>
						<time class="timestamp" datetime=""><?echo $categories[0]->cat_name ?> / <? the_time();  ?> / <? the_date(); ?> </time>
						<h2><? the_title(); ?></h2>
						<div class="author-slug">By <span><a href="/author/<? the_author(); ?>"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a></a></span></div>
						
						<a href="<?php echo get_permalink( $post->ID ); ?>">Tweet This</a>
						<a href="<?php echo get_permalink( $post->ID ); ?>">Share on Facebook</a>
						<a href="<?php echo get_permalink( $post->ID ); ?>">Share On Tumblr</a>
					</header>
					
				
					<section class="text-left"><?php the_content(); ?></section>
					
					<footer class="post-footer">
						<? twentytwelve_entry_meta(); ?>
					</footer>			
				</article>
				
				
				<?php endwhile; ?>
			
		<?php endif; ?>

</section>


<section class="container single-post-wrapper text-center">		
		<div class="container-fluid">
			<h3 class="related-posts-header"><span>More from</span><br> '<?echo $categories[0]->cat_name?>'</h3>
		</div>
		
		
		<section class="container-fluid related-posts">
			<div class="row">
			<?php query_posts(array('cat' => $categories[0]->cat_ID, 'post_status' => 'publish' , 'posts_per_page' => '3', 'post__not_in' => array($post->ID)));    ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="col-sm-4 col-md-4 post">
				
					<a href="<? the_permalink();?>">
					<figure class="post-thumb">
					<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
					</figure>
					</a>
				
					<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
				
					<?php //the_excerpt(); ?>
					
					<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>

				</article>

				<?php endwhile; endif; ?>
			</div>
		</section>
</section>

<?php get_footer(); ?>