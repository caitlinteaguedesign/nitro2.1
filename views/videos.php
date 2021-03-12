<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Videos</h1>

		<div class="grid">
			<p class="column_6 paragraph">Videos can be served in several formats. HTML5 Video is handy in that it's repsonsive by default. Our usual way of serving vidoes in iframes (using an embed code), is not inherently responsive. Below are some examples and tips.</p>

			<div class="column_6 alert alert_info">
				<div class="alert__heading">Pro tip!</div>
				<p>Don't modify the properties of the iframe or wrapper directly. For custom padding, max-width, alignment, background-color, etc, use additional wrappers around the iframe-wrapper.</p>
			</div>
		</div>

		<section>
			<h2 class="heading-2">HTML5 Video</h2>

			<p class="paragraph">HTML5 Videos are thankfully responsive by default, but they have their quirks. Chrome (as of 2019) automatically includes a download button action. Be warned that controls in HTML5 video controls may have poor compatibility with jQuery sliders and other 3rd party libraries (as we found with the product media sliders in 2018). Just test thoroughly!</p>

			<div class="grid">

				<div class="column_6 video-frame">
					<video controls poster="//d9twdiekqysl5.cloudfront.net/ed-toys/ed-toys-00001.png" controlsList="nodownload">
						<source src="//d3vd9hr1vidhzq.cloudfront.net/ed-toys.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;video controls poster="{image link}" controlsList="nodownload"&gt;
	&lt;source src="{video link}.mp4" type="video/mp4"&gt;
	Your browser does not support the video tag.
&lt;/video&gt;
</code></pre>

			</div>
		</section>

		<section>
			<h2 class="heading-2">Iframe Video</h2>
			<p class="paragraph">Iframe videos require a parent element with the class <b>.iframe-wrapper</b> aand class <b>.iframe</b> on the iframe itself.</p>

			<div class="grid">
				<div class="column_6 video-frame">
					<div class="iframe-wrapper">
						<iframe class="iframe" src="//leerburg.com/embed.php?id=ed-toys" frameborder="0" scrolling="no"></iframe>
					</div>
				</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="iframe-wrapper"&gt;
	&lt;iframe class="iframe" src="//leerburg.com/embed.php?id=ed-toys" frameborder="0" scrolling="no"&gt;
	&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>			
			</div>	
			
		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>