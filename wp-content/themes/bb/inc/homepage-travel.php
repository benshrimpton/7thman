<section class="container-fluid">
	
	<header class="container">
		<h1 class="page-header text-right">TRAVEL</h1>
	</header>	
	
	<section class="container">
		<div class="row masonize-me">
			<?php query_posts('cat=9 & posts_per_page=4'); ?>	
			<?php while ( have_posts() ) : the_post();  ?>
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
</section>	