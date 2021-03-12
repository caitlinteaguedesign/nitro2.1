<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Quick Start Guide</h1>
		<p class="paragraph">For miscellaneous projects floating around leerburg.com, here's a quick guide to get you started.</p>	

		<section>
			<h2 class="heading-2">Starter sample</h2>
<pre class="code-block code-snippet"><code class="html">&lt;?php
	$SVG_PATH = "//leerburg.com/svg/core-icons.svg";
	$ICONIC_PATH = "//leerburg.com/svg/open-iconic-sprites.svg"; 
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;	
	&lt;link rel="stylesheet" href="//leerburg.com/nitro-leerburg/build/global.css"&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;div class="container" role="presentation"&gt;

	&lt;main class="main global-padding"&gt;

		&lt;h1 class="heading-1"&gt;Page Title&lt;/h1&gt;

		&lt;!-- actual content will vary --&gt;
		&lt;section&gt;
			&lt;h2 class="heading-2"&gt;Section Title&lt;/h2&gt;
		&lt;/section&gt;

	&lt;/main&gt;
&lt;/div&gt;&lt;!-- ends .container --&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

		</section>	

		<section>
			
		<h2 class="heading-2">HTML structure explained</h2>
<pre class="code-block code-snippet"><code class="html">&lt;?php
	// declare path for svgs in PHP (for convenience, best in an include or config if your project has one)
	$SVG_PATH = "//leerburg.com/nitro/img/core-icons.svg";
	$ICONIC_PATH = "//leerburg.com/nitro/img/open-iconic-sprites.svg"; 
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;	
	&lt;!-- stylesheet link --&gt;
	&lt;link rel="stylesheet" href="//leerburg.com/nitro/css/styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;!-- typically header area --&gt;

&lt;!-- typically the end of a header include --&gt;
&lt;!-- ************************************* --&gt;

		&lt;!-- interior layout here (details below) --&gt;

&lt;!-- *************************************** --&gt;
&lt;!-- typically the start of a footer include --&gt;

	&lt;!-- typically footer area --&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

		</section>	

		<section>
			<h2 class="heading-2">Interior layout annotated example</h2>

<pre class="code-block code-snippet"><code class="html">&lt;!-- the wrapper around all the content on the page (sometimes excluding main header/footer includes, depends on layout) --&gt;
&lt;div class="container" role="presentation"&gt;
	
	&lt;!-- typically the spot you might add a sidebar include --&gt;

	&lt;!-- content on *this* page --&gt;
	&lt;main class="main global-padding"&gt;

		&lt;!-- every page should have one &lt;h1&gt; --&gt;
		&lt;h1 class="heading-1"&gt;Page Title&lt;/h1&gt;	

		&lt;!-- some content, like &lt;p&gt; can just exist on the page without additional markup --&gt;
		&lt;!-- .paragraph and .heading-# classes contains css for vertical rhythm --&gt;
		&lt;p class="paragraph"&gt;Some text...&lt;/p&gt;
	
		&lt;section&gt;
			&lt;!-- section is a semantic element that should include a heading tag --&gt;
			&lt;h2 class="heading-2"&gt;Section Title&lt;/h2&gt;	

			&lt;!-- for more complex layouts, you can use the grid system --&gt;
			&lt;!-- the grid system need not be used to define the whole page, just use as needed --&gt;
			&lt;div class="grid"&gt;
				&lt;div class="column_6"&gt;&lt;/div&gt;
				&lt;div class="column_6"&gt;&lt;/div&gt;
				&lt;div class="column_4"&gt;&lt;/div&gt;
				&lt;div class="column_8"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/section&gt;

	&lt;/main&gt;
&lt;/div&gt;&lt;!-- ends .container --&gt;
</code></pre>

		</section>			

	</main>
</div>

<?php include '../includes/footer.php'; ?>		