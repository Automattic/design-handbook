<?php
	$page = "Colors-Alt";
	$page_title = "WordPress.com Styles - " . $page;
	$body_class = "colors";
	include 'include/head.php';
	include 'include/nav.php';
?>

<div class="content-wrapper">
	<div class="main">
		<div class="primary">
			<!-- <h1 class="page__title"><?php echo $page; ?></h1> -->

			<article class="section--light">
				<h1 class="section__title">WordPress.com Color Guide</h1>
				<p>For the sake of brand consistency across all of our user facing pages, here are some useful references and examples for the correct use of the official WordPress.com colors. For web projects, use the hex value unless you’re using RGBA with alpha transparency. For print projects, you will have the best results by using the Pantone spot color, or PMS, values listed below. If Pantone matching is not available, use the CMYK process equivalent specific to the paper stock on which you’ll be printing (coated or uncoated).</p>
			</article><!-- .section-->
			<div class="colors-navigation">
				<a href="#base-blues" class="colors-navigation__link">
					<div class="color base-lighter-blue"></div>
					<div class="color base-darker-blue"></div>
				</a>
				<a href="#complimentary-blues" class="colors-navigation__link">
					<div class="color light-blue"></div>
					<div class="color nkotb-blue"></div>
					<div class="color midnight-blue"></div>
				</a>
				<a href="#oranges" class="colors-navigation__link">
					<div class="color jazzy-orange"></div>
					<div class="color fire-orange"></div>
				</a>
				<a href="#grays" class="colors-navigation__link">
					<div class="color ultra-light-gray"></div>
					<div class="color light-gray"></div>
					<div class="color gravy-gray"></div>
					<div class="color shadow-gray"></div>
					<div class="color coal-gray"></div>
				</a>
				<a href="#alerts" class="colors-navigation__link">
					<div class="color alert-red"></div>
					<div class="color alert-green"></div>
					<div class="color alert-yellow"></div>
				</a>
			</div>
			<article class="section">
				<div class="section__information">
					<h2 class="section__title" id="base-blues">Base Blues</h2>
				</div>
				<div class="preview">
					<div class="color base-lighter-blue">
						<div class="color__information">
							<h3>Base Lighter Blue</h3>
							<div class="color__screen">
								<span>#1e8cbe</span>
								<span>rgb(30, 140, 190)</span>
								<span>$base-lighter-blue</span>
							</div>
							<div class="color__print">
								<span>PMS 7460</span>
								<span>CMYK (Coated) 100, 6, 2, 10</span>
								<span>CMYK (Uncoated) 100, 0, 10, 0</span>
							</div>
						</div>
					</div>
					<div class="color base-darker-blue">
						<div class="color__information">
							<h3>Base Darker Blue</h3>
							<div class="color__screen">
								<span>#0074a2</span>
								<span>rgb(0, 116, 162)</span>
								<span>$base-darker-blue</span>
							</div>
							<div class="color__print">
								<span>PMS 7462</span>
								<span>CMYK (Coated) 100, 48, 6, 3</span>
								<span>CMYK (Uncoated) 77, 33, 9, 11</span>
							</div>
						</div>
					</div>
				</div><!-- .preview -->
			</article><!-- .section-->

			<article class="section">
				<div class="section__information">
					<h2 class="section__title" id="complimentary-blues">Complimentary Blues</h2>
					<p>These are extra blues for use in situations where the base blues are not a good fit. They work especially well for large blocks of color or other accents.</p>
				</div>
				<div class="preview">
					<div class="color light-blue">
						<div class="color__information">
							<h3>Light Blue</h3>
							<div class="color__screen">
								<span>#78c8e6</span>
								<span>rgb(120, 200, 230)</span>
								<span>$light-blue</span>
							</div>
							<div class="color__print">
								<span>PMS 2905</span>
								<span>CMYK (Coated) 45, 1, 0, 1</span>
								<span>CMYK (Uncoated) 37, 1, 3, 0</span>
							</div>
						</div>
					</div>
					<div class="color nkotb-blue">
						<div class="color__information">
							<h3>New Kid on the Block Blue</h3>
							<span class="color__description">(perfect for large blocks of color)</span>
							<div class="color__screen">
								<span>#2ea2cc</span>
								<span>rgb(46, 162, 204)</span>
								<span>$nkotb-blue</span>
							</div>
							<div class="color__print">
								<span>PMS 7688</span>
								<span>CMYK (Coated) 69, 19, 4, 0</span>
								<span>CMYK (Uncoated) 67, 17, 3, 0</span>
							</div>
						</div>
					</div>
					<div class="color midnight-blue">
						<div class="color__information">
							<h3>Midnight Blue</h3>
							<span class="color__description">(good for places where a really dark blue is needed)</span>
							<div class="color__screen">
								<span>#005684</span>
								<span>rgb(0, 86, 132)</span>
								<span>$midnight-blue</span>
							</div>
							<div class="color__print">
								<span>PMS 647</span>
								<span>CMYK (Coated) 96, 54, 5, 27</span>
								<span>CMYK (Uncoated) 80, 46, 11, 8</span>
							</div>
						</div>
					</div>
				</div><!-- .preview -->
			</article><!-- .section-->

			<article class="section">
				<div class="section__information">
					<h2 class="section__title" id="oranges">Oranges</h2>
					<p>Should be used for hovers in links and other accents (TBA).</p>
				</div>
				<div class="preview">
					<div class="color jazzy-orange">
						<div class="color__information">
							<h3>Jazzy Orange</h3>
							<span class="color__description">(For all that Jazz)</span>
							<div class="color__screen">
								<span>#f1831e</span>
								<span>rgb(241, 131, 30)</span>
								<span>$jazzy-orange</span>
							</div>
							<div class="color__print">
								<span>PMS 151</span>
								<span>CMYK (Coated) 0, 60, 100, 0</span>
								<span>CMYK (Uncoated) 0, 43, 91, 0</span>
							</div>
						</div>
					</div>
					<div class="color fire-orange">
						<div class="color__information">
							<h3>Fire Orange</h3>
							<div class="color__screen">
								<span>#d54e21</span>
								<span>rgb(215, 77, 17)</span>
								<span>$fire-orange</span>
							</div>
						</div>
					</div>
				</div><!-- .preview -->
			</article><!-- .section-->

			<article class="section">
				<div class="section__information">
					<h2 class="section__title" id="grays">Grey, Gray, Cinza, Gris, Nezumi-iro – it blends</h2>
					<p>Grey.</p>
				</div>
				<div class="preview">
					<div class="color ultra-light-gray">
						<div class="color__information">
							<h3>Ultra Light Gray</h3>
							<span class="color__description">(content area sidebar)</span>
							<div class="color__screen">
								<span>#f9f9f9</span>
								<span>rgb(249, 249, 249)</span>
								<span>$ultra-light-gray</span>
							</div>
							<div class="color__print">
								<span>PMS 7541</span>
								<span>CMYK (Coated) 7, 1, 3, 2</span>
								<span>CMYK (Uncoated) 7, 1, 3, 0</span>
							</div>
						</div>
					</div>
					<div class="color light-gray">
						<div class="color__information">
							<h3>Light Gray</h3>
							<div class="color__description">(page background)</div>
							<div class="color__screen">
								<span>#f1f1f1</span>
								<span>rgb(241, 241, 241)</span>
								<span>$light-gray</span>
							</div>
						</div>
					</div>
					<div class="color gravy-gray">
						<div class="color__information">
							<h3>Gravy Gray</h3>
							<span class="color__description">(borders/dividers in content area)</span>
							<div class="color__screen">
								<span>#e5e5e5</span>
								<span>rgb(229, 229, 229)</span>
								<span>$gravy-gray</span>
							</div>
							<div class="color__print">
								<span>PMS Cool Gray 1</span>
								<span>CMYK (Coated) 4, 2, 4, 8</span>
								<span>CMYK (Uncoated) 4, 3, 6, 7</span>
							</div>
						</div>
					</div>
					<div class="color shadow-gray">
						<div class="color__information">
							<h3>Shadow Gray</h3>
							<span class="color__description">(shadow on main content area)</span>
							<div class="color__screen">
								<span>#dfdfdf</span>
								<span>rgb(223, 223, 223)</span>
								<span>$shadow-gray</span>
							</div>
						</div>
					</div>
					<div class="color coal-gray">
						<div class="color__information">
							<h3>Coal Gray</h3>
							<span class="color__description">(Text)</span>
							<div class="color__screen">
								<span>#464646</span>
								<span>rgb(70, 70, 70)</span>
								<span>$coal-gray</span>
							</div>
							<div class="color__print">
								<span>PMS Cool Gray 11</span>
								<span>CMYK (Coated) 44, 34, 22, 77</span>
								<span>CMYK (Uncoated) 30, 17, 8, 51</span>
							</div>
						</div>
					</div>
				</div><!-- .preview -->
			</article><!-- .section-->

			<article class="section">
				<div class="section__information">
					<h2 class="section__title" id="alerts">Validation and Alerts</h2>
					<p>These colors are useful for form field validation, alerts, warnings, and pats on the back. Not intended for large blocks of color. Works great with Noticons! Optimized for color blindness.</p>
				</div>
				<div class="preview">
					<div class="color alert-red">
						<div class="color__information">
							<h3>Alert Red</h3>
							<div class="color__screen">
								<span>#dd3d36</span>
								<span>$alert-red</span>
							</div>
						</div>
					</div>
					<div class="color alert-green">
						<div class="color__information">
							<h3>Alert Green</h3>
							<div class="color__screen">
								<span>#4cb420</span>
								<span>$alert-green</span>
							</div>
						</div>
					</div>
					<div class="color alert-yellow">
						<div class="color__information">
							<h3>Alert Yellow</h3>
							<div class="color__screen">
								<span>#ffba00</span>
								<span>$alert-yellow</span>
							</div>
						</div>
					</div>
				</div><!-- .preview -->
			</article><!-- .section-->

			<article class="section--light">
				<h2 class="section__title">Adobe Stack Exchange File</h2>
				<p>If you work with WordPress.com colors on a daily basis, it can be helpful to load all of the colors as swatches in Photoshop, Illustrator, or InDesign. Grab a .ase file for the RGB colors <a href="https://mc.a8c.com/includes/img-uploader/files/1359763197-wpcom-colors.ase" target="_blank">here</a>.</p>

				<h3>Instructions</h3>
				<p>In Illustrator, from the Swatches palette pop-up menu, select Open Swatch Libraries > Other Libraries and select your saved .ase file. The file will open in a separate palette labeled with the name. To move these swatches to the Swatches palette, select the swatches you wish to move and from the pop-up menu, select Add to Swatches.</p>

				<p>In Photoshop or InDesign, from the Swatches palette pop-up menu, go to Load Swatches and navigate to your .ase file. Open the .ase file — your colors should appear in the Swatches palette.</p>
			</article><!-- .section-->

			<article class="section--light">
				<h2 class="section__title">Use in Compass</h2>
				<p>Put the following at the top of your .scss file:</p>
				<pre>@import "wpcom/colors";</pre>
				<p>And then use the variable names listed in the swatches.</p>
			</article><!-- .section-->

		</div>
	</div>
</div>

<?php include 'include/footer.php'; ?>