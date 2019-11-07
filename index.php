<?php get_header(); ?>

<div  class="blog">
		<?php
		$i = true;
		while ( have_posts() ) {
			the_post(); 
			$flex = $i ? 'flex-direction: row' : 'flex-direction: row-reverse';
			?>
			<div class="postPreview" style="<?php echo $flex; $i = !$i ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="photographerTheme">
				<div class="previewContent">
					<a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php } ?>
		<div class="pagination">
			<?php
			echo paginate_links();
			?>
		</div>
</div>
<?php get_footer(); ?>