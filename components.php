<?php
	$page = "Components";
	$page_title = "WordPress.com Styles - " . $page;
	include 'include/head.php';
	include 'include/nav.php';
?>

<div class="main">
	<div class="primary">
		<h1 class="page__title"><?php echo $page; ?></h1>

		<article class="section">
			<h2 class="section__title">WordPress Icon</h2>
			<p>Pulls the icon from a font.</p>
			<div class="preview">
				<span class="wpcom-logo"></span>
			</div><!-- .preview -->
			<pre class="code-block">&lt;span class="wpcom-logo"&gt;&lt;span&gt;</pre>
		</article><!-- .section-->

		<article class="section">
			<h2 class="section__title">Avatar</h2>
			<p>Both square and circle! Gotta fuel the round avatar debate!</p>
			<div class="preview">
				<div class="avatar">
					<img height="50" width="50" alt="Blavatar" src="http://1.gravatar.com/avatar/de8fa8a09d70eeb2166be57caf94ed92?s=100&amp;d=http%3A%2F%2F0.gravatar.com%2Fblavatar%2F2dcd2d6eb4a4035b8ed295a2cf83aca6%3Fs%3D100%26d%3Dhttp%253A%252F%252Fs2.wp.com%252Fwp-content%252Fthemes%252Fh4%252Ftabs%252Fimages%252Fdefaultavatar.png&amp;r=PG" rel="http://blog.nickhamze.com">
				</div>
				<div class="avatar--rounded">
					<img height="50" width="50" alt="Blavatar" src="http://1.gravatar.com/avatar/de8fa8a09d70eeb2166be57caf94ed92?s=100&amp;d=http%3A%2F%2F0.gravatar.com%2Fblavatar%2F2dcd2d6eb4a4035b8ed295a2cf83aca6%3Fs%3D100%26d%3Dhttp%253A%252F%252Fs2.wp.com%252Fwp-content%252Fthemes%252Fh4%252Ftabs%252Fimages%252Fdefaultavatar.png&amp;r=PG" rel="http://blog.nickhamze.com">
				</div>
			</div><!-- .preview -->
			<pre class="code-block">&lt;div class="avatar"&gt;
&nbsp;&nbsp;&lt;img height="50" width="50" alt="Blavatar" src="#" rel="#"&gt;
&lt;/div&gt;

&lt;div class="avatar--rounded"&gt;
&nbsp;&nbsp;&lt;img height="50" width="50" alt="Blavatar" src="#" rel="#"&gt;
&lt;/div&gt;</pre>
		</article><!-- .section -->

		<article class="section">
			<h2 class="section__title">Button: Primary</h2>
			<p>Aenean lacinia bibendum nulla sed consectetur.</p>
			<div class="preview">
				<a class="button--primary">I'm a BUTTON!!!</a>
				<a class="button--primary">Me too!</a>
				<a class="button--primary" disabled>Disabled</a>
				<a class="button--primary" disabled>*sniff*</a>
			</div><!-- .preview -->
			<pre class="code-block">&lt;a class="button--primary"&gt;Active button&lt;/a&gt;

&lt;a class="button--primary" disabled&gt;Disabled button&lt;/a&gt;</pre>
		</article><!-- .section -->

		<article class="section">
			<h2 class="section__title">Button: secondary</h2>
			<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<div class="preview">
				<a class="button--secondary">I'm a BUTTON!!!</a>
				<a class="button--secondary">Me too!</a>
				<a class="button--secondary" disabled>Disabled :(</a>
				<a class="button--secondary" disabled>*sniff*</a>
			</div><!-- .preview -->
			<pre class="code-block">&lt;a class="button--secondary"&gt;Active button&lt;/a&gt;

&lt;a class="button--secondary" disabled&gt;Disabled button&lt;/a&gt;</pre>
		</article><!-- .section -->

		<article class="section">
			<h2 class="section__title">Text Input</h2>
			<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<div class="preview">
				<input type="text" name="name" value="" id="text-input" placeholder="Placeholder text.">
			</div><!-- .preview -->
			<pre class="code-block">&lt;input type="text" name="name" value="" id="text-input" placeholder="Placeholder text."&gt;</pre>
		</article><!-- .section-->

		<article class="section">
			<h2 class="section__title">Text Area</h2>
			<p>Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<div class="preview">
				<textarea name="name" id="textarea">Some regular text.</textarea>
			</div><!-- .preview -->
			<pre class="code-block">&lt;textarea name="name" id="textarea"&gt;Some regular text.&lt;/textarea&gt;</pre>
		</article><!-- .section-->

		<article class="section">
			<h2 class="section__title">Radio Button</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
			<div class="preview">
				<div class="preview__row">
					<input type="radio" name="filters" id="newest" value="newest" checked="checked" /> <label for="newest">Newest</label><br>
				</div>
				<div class="preview__row">
					<input type="radio" name="filters" id="most-popular" value="most-popular" /> <label for="most-popular">Most Popular</label>
				</div>
			</div><!-- .preview -->
			<pre class="code-block">&lt;input type="radio" name="filters" id="most-popular" value="most-popular" /&gt; &lt;label for="most-popular"&gt;Most Popular&lt;/label&gt;</pre>
		</article><!-- .section-->

		<article class="section">
			<h2 class="section__title">Template</h2>
			<p>Description</p>
			<div class="preview">
				.preview
			</div><!-- .preview -->
			<pre class="code-block">.code-block</pre>
		</article><!-- .section-->

	</div>
</div><!-- .main -->

<?php include 'include/footer.php'; ?>