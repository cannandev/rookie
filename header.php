<?php //var_dump($post); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class( $class ); ?>>
	<div class="container">
		<div class="global-nav">
			<nav>
				<ul>
					<li><a href="#">Alumni</a></li>
					<li><a href="#">Community</a></li>
					<li><a href="#">Current Students</a></li>
					<li><a href="#">Faculty Staff</a></li>
					<li><a href="#">Newsroom</a></li>
					<li><a href="#">Quicklinks</a></li>
				</ul>
			</nav>
		</div><!-- /.global-nav -->
		<header>
			<a href="<?php bloginfo('url'); ?>"><img src="/wp-content/themes/rookie/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About IT</a></li>
					<li><a href="#">Teaching &amp; Learning</a></li>
					<li><a href="#">Technology Services</a></li>
					<li><a href="#">Get Help</a></li>
				</ul>
			</nav>
			<span>Search</span>
			<div class="page-header">Current Section Title</div>
			<div class="breadcrumbs">
				<span><a href="<?php echo $post->post_parent; ?>"><?php echo get_the_title($post->post_parent); ?></a></span> // 
				<span><?php the_title(); ?></span>
			</div>
		</header><!-- /header -->
