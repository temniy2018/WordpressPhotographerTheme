<?php get_header(); ?>
	<?php $homepageWelcome = new WP_Query(array(
		'posts_per_page' => 1,
		'post_type' => 'WelcomeSection'
	)) ?>

	<?php while($homepageWelcome->have_posts()) {
		$homepageWelcome->the_post(); ?>
		<div class="welcomeSection" style="	background-image: linear-gradient( #0007 , #0007 ), url(<?php the_post_thumbnail_url(); ?>);">
		<div class="welcomeSection_textBlock">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
	<?php } ?>
	<hr />

	<?php $homepageStudio = new WP_Query(array(
		'posts_per_page' => 1,
		'post_type' => 'StudioSection'
	));
	while($homepageStudio->have_posts()) {
		$homepageStudio->the_post(); ?>
		<div class="studioSection" style="background-image: linear-gradient(45deg, white 30.5%, #0002 30.5%), url(<?php the_post_thumbnail_url(); ?>);">
			<?php the_content(); ?>
		</div>
		<div class="studioSection-mobile">
			<img src="<?php the_post_thumbnail_url(); ?>" class="studioSection-mobile_img">
			<?php the_content() ?>
		</div>
	<?php } ?>
	
	<?php $homepageExpressing = new WP_Query(array(
		'posts_per_page' => 1,
		'post_type' => 'ExpressYourself'
	));
	while($homepageExpressing->have_posts()) {
		$homepageExpressing->the_post(); ?>
		<div class="expressYourself">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	<?php } ?>

	<div class="serviceSection">
		<h2>Services</h2>
		<div class="serviceSection_container">
		<?php $homepageServices = new WP_Query(array(
			'post_type' => 'Services'
		));
		while($homepageServices->have_posts()) {
			$homepageServices->the_post(); ?>
			<div class="serviceSection_service">
				<img src="<?php the_post_thumbnail_url(); ?>" class="serviceSection_service_img">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>	
			</div>
		<?php } ?>
		</div>
	</div>

	<div class="feedbacksSection">
		<h2>Our clients feedbacks</h2>
		<div class="feedbacksSection_container">
		<?php $homepageFeedbacks = new WP_Query(array(
			'post_type' => 'Feedbacks'
		));
		while($homepageFeedbacks->have_posts()) {
			$homepageFeedbacks->the_post(); ?>
			<div class="feedbacksSection_feedback">
				<h3><?php the_title() ?></h3>
				<?php the_content(); ?>
			</div>
		<?php } ?>
		</div>
	</div>

	<?php $homepagePortfolioLink = new WP_Query(array(
		'posts_per_page' => 1,
		'post_type' => 'ExpressPortfolio'
	));
	while($homepagePortfolioLink->have_posts()) {
		$homepagePortfolioLink->the_post(); ?>
		<div class="portfolioLinkSection">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
	</div>
	<?php } ?>
<?php get_footer(); ?>