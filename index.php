<?php
	$page = "Components";
	$page_title = "WordPress.com Styles - " . $page;
	include 'include/head.php';
	include 'include/nav.php';
?>

<div class="content-wrapper">
	<div class="main">
		<div class="primary">
			<h1 class="title_page"><?php echo $page; ?></h1>

			<article class="sub">
				<h2 class="title_sub">WordPress Icon</h2>
				<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				<div class="demo">
					<span class="wpcom_logo"></span>
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;span class="wpcom--logo"&gt;&lt;span&gt;</pre>
			</article><!-- .sub-->

			<article class="sub">
				<h2 class="title_sub">Avatar</h2>
				<p>Donec id elit non mi porta gravida at eget metus.</p>
				<div class="demo">
					<div class="avatar">
						<img height="50" width="50" alt="Blavatar" src="http://1.gravatar.com/avatar/de8fa8a09d70eeb2166be57caf94ed92?s=100&amp;d=http%3A%2F%2F0.gravatar.com%2Fblavatar%2F2dcd2d6eb4a4035b8ed295a2cf83aca6%3Fs%3D100%26d%3Dhttp%253A%252F%252Fs2.wp.com%252Fwp-content%252Fthemes%252Fh4%252Ftabs%252Fimages%252Fdefaultavatar.png&amp;r=PG" rel="http://blog.nickhamze.com">
					</div>
					<div class="avatar">
						<img class="rounded" height="50" width="50" alt="Blavatar" src="http://1.gravatar.com/avatar/de8fa8a09d70eeb2166be57caf94ed92?s=100&amp;d=http%3A%2F%2F0.gravatar.com%2Fblavatar%2F2dcd2d6eb4a4035b8ed295a2cf83aca6%3Fs%3D100%26d%3Dhttp%253A%252F%252Fs2.wp.com%252Fwp-content%252Fthemes%252Fh4%252Ftabs%252Fimages%252Fdefaultavatar.png&amp;r=PG" rel="http://blog.nickhamze.com">
					</div>
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;div class="avatar"&gt;
&nbsp;&nbsp;&lt;img height="50" width="50" alt="Blavatar" src="#" rel="#"&gt;
&lt;/div&gt;

&lt;div class="avatar"&gt;
&nbsp;&nbsp;&lt;img class="rounded" height="50" width="50" alt="Blavatar" src="#" rel="#"&gt;
&lt;/div&gt;</pre>
			</article><!-- .sub -->

			<article class="sub">
				<h2 class="title_sub">Button: Primary</h2>
				<p>Aenean lacinia bibendum nulla sed consectetur.</p>
				<div class="demo">
					<a class="button_primary">I'm a BUTTON!!!</a>
					<a class="button_primary">Me too!</a>
					<a class="button_primary" disabled>Disabled</a>
					<a class="button_primary" disabled>*sniff*</a>
					<!-- <button>I'm a BUTTON!!!</button>
					<button>Me too!</button>
					<button disabled>Disabled :(</button>
					<button disabled>*sniff*</button> -->
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;a class="button_primary"&gt;Active button&lt;/a&gt;

&lt;a class="button_primary" disabled&gt;Disabled button&lt;/a&gt;</pre>
			</article><!-- .sub -->

			<article class="sub">
				<h2 class="title_sub">Button: secondary</h2>
				<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<div class="demo">
					<a class="button_secondary">I'm a BUTTON!!!</a>
					<a class="button_secondary">Me too!</a>
					<a class="button_secondary" disabled>Disabled :(</a>
					<a class="button_secondary" disabled>*sniff*</a>
					<!-- <button class="button_secondary">I'm a BUTTON!!!</button>
					<button class="button_secondary">Me too!</button>
					<button class="button_secondary" disabled>Disabled :(</button>
					<button class="button_secondary" disabled>*sniff*</button> -->
				</div><!-- .demo -->
				<pre class="pre--sub">&lt;a class="button_secondary"&gt;Active button&lt;/a&gt;

&lt;a class="button_secondary" disabled&gt;Disabled button&lt;/a&gt;</pre>
			</article><!-- .sub -->

			<article class="sub">
				<h2 class="title_sub">Text Input</h2>
				<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<div class="demo">
					<input type="text" name="name" value="" id="text-input" placeholder="Placeholder text.">
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;input type="text" name="name" value="" id="text-input" placeholder="Placeholder text."&gt;</pre>
			</article><!-- .sub-->

			<article class="sub">
				<h2 class="title_sub">Text Area</h2>
				<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<div class="demo">
					<textarea name="name" id="textarea">Some regular text.</textarea>
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;textarea name="name" id="textarea"&gt;Some regular text.&lt;/textarea&gt;</pre>
			</article><!-- .sub-->

			<article class="sub">
				<h2 class="title_sub">Radio Button</h2>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
				<div class="demo">
					<div class="radio_row">
						<input type="radio" name="filters" id="newest" value="newest" checked="checked" /> <label for="newest">Newest</label><br>
					</div>
					<div class="radio_row">
						<input type="radio" name="filters" id="most-popular" value="most-popular" /> <label for="most-popular">Most Popular</label>
					</div>
				</div><!-- .demo -->
				<pre class="pre_sub">&lt;input type="radio" name="filters" id="most-popular" value="most-popular" /&gt; &lt;label for="most-popular"&gt;Most Popular&lt;/label&gt;</pre>
			</article><!-- .sub-->

			<article class="sub">
				<h2 class="title_sub">Template</h2>
				<p>Description</p>
				<div class="demo">
					demo
				</div><!-- .demo -->
				<pre class="pre_sub">pre</pre>
			</article><!-- .sub-->

		</div>
	</div>
</div>

<?php include 'include/footer.php'; ?>