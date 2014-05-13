<input class="checkbox-off-canvas" type="checkbox" id="menu">
<label class="label-off-canvas" for="menu" onclick></label>
<header class="wpcom-header">
	<div class="wrapper">
		<a class="wpcom-header__site-title wpcom-logo" href="#">WordPress.com</a>
		<nav class="wpcom-nav nav-off-canvas" role="navigation">
			<h3 class="wpcom-logo"><span class="menu-toggle">Menu</span></h3>
			<ul>
				<!-- Let's figure out some content sections! -->
				<li <?php is_current( $page, 'Colors' ); ?> ><a href="colors.php">Colors</a></li>
				<li <?php is_current( $page, 'Components' ); ?> ><a href="index.php">Components</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="site-content__wrapper">
<!-- .site-content__wrapper is required for the responsive nav to work properly. It acts as the container for everything outside of the nav. It closses in footer.php. -->