<input class="checkbox-off-canvas" type="checkbox" id="menu">
<label class="label-off-canvas" for="menu" onclick></label>
<header class="wpcom-header">
	<div class="wrapper">
		<a class="wpcom-header__site-title wpcom-logo" href="#">WordPress.com</a>
		<nav class="wpcom-nav nav-off-canvas" role="navigation">
			<h3 class="wpcom-logo"><span class="menu-toggle">Menu</span></h3>
			<ul>
				<!-- Let's figure out some content sections! -->
				<li <?php is_current( $page, 'Typography' ); ?> ><a href="#">Typography</a></li>
				<li <?php is_current( $page, 'Colors' ); ?> ><a href="colors.php">Colors</a>
					<ul>
						<li <?php is_current( $page, 'Colors-Alt' ); ?> ><a href="colors-b.php">Colors-Alt</a></li>
					</ul>
				</li>
				<li <?php is_current( $page, 'Components' ); ?> ><a href="index.php">Components</a></li>
				<li <?php is_current( $page, 'Cheat Sheet' ); ?> ><a href="#">Cheat sheet</a></li>
				<li><a href="#">1st level</a>
					<ul>
						<li><a href="#">2nd level</a>
							<ul>
								<li><a href="#">3rd level</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
						</li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="site-content__wrapper">
<!-- .site-content__wrapper is required for the responsive nav to work properly. It acts as the container for everything outside of the nav. It closses in footer.php. -->