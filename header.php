<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset") ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php wp_head(); ?>
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>

	<!-- your header logo is the title of the pages, so you need to make it as 'PhotoZone' title and 'PhotoZone portfolio' title -->
	<header>
		<p class="header_logo"><?php the_title(); ?></p>
		<a class="header_portfolioLink" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
	</header>
	