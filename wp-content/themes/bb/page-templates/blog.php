<?php
/**
 * Template Name: BLOG
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>




<section class="container homepage-heros secondary-row">
	<div class="row">
	<?php query_posts("posts_per_page=30 & offset=0"); ?>	
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


<?php get_footer(); ?>
