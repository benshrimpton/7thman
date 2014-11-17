<section class="container-fluid">
<header class="container">
	<div class="page-header">
	<?php query_posts('cat=3 & posts_per_page=1');  while ( have_posts() ) : the_post();  ?>	
		<h1 class="pull-left">FASHION</h1>
		<time class="pull-right homepage-time">last updated <? the_time();  ?> / <? the_date(); ?></time>
	<?php endwhile; wp_reset_query(); ?>
	</div>
</header>	
<section class="container">
	<div class="row masonize-me">
		<?php query_posts('cat=3 & posts_per_page=4'); while ( have_posts() ) : the_post(); ?>	
		<article class="col-sm-6 col-md-3 post">
			<div class="inner">
				<a href="<? the_permalink();?>">
			<figure class="post-thumb">
				<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
			</figure>
			</a>
			<h2><a href="<? the_permalink();?>"><?  the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a href="<? the_permalink();?>" title="<?  the_title(); ?>" class="read-more">Read more</a>
			</div>
		</article>
	<?php endwhile; wp_reset_query(); ?>
	</div>
</section>