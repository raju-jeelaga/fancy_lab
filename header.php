<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fancy_lab
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="main-site" class="page-wrap">
		<header class="site-header">
			<div class="smart-sticky-header">
				<div class="container">
					<div class="row">
						<div class="col-3">
							<div class="logo">
								<a href="#"><img src="" alt="Logo"></a>
							</div>
						</div>
						<div class="col-9">
							<ul class="nav-links">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>