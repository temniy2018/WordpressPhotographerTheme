<?php get_header(); ?>

<div class="blog">
		<?php
		while ( have_posts() ) {
			the_post(); ?>
			<div class="post">
				<h1><?php the_title() ?></h2>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="photographerTheme">
				<?php the_content(); ?>
			</div>
		<?php } 
		?>
</div>
<?php get_footer(); ?>