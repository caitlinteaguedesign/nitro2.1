<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Spacing, Dimensions, &amp; Scrollable</h1>
		<p class="paragraph">Jump to section: <a class="link link_style-default" href="#spacing">Vertical Spacing</a>, <a class="link link_style-default" href="#positioning">Positioning</a>, and <a class="link link_style-default" href="#pixels">Max-width &amp; Height</a>.</p>		

		<section id="spacing">
			<h2 class="heading-2">Vertical Spacing</h2>
			<p class="paragraph">Vertical spacing is governed by the height of body text when the font-size is 16px (this value is a variable set in a theme file <b>$standard-text-height</b>). This helps establish a consistant vertical rhythm. In the example below, each class uses a mixin to calculate the appropriate margin top and bottom. Simply @include <b>vertical-rhythm-bottom</b> or <b>vertical-rhythm-top</b> and pass an integer for the amount of "line heights" to make the margins. In the text example below, every element has margin-bottom of 1 line-height, while the <b>&lt;h3&gt;</b> has a margin-top of 2 line-height.</p>

			<p class="paragraph">If you want to assign a margin bottom manually, a few classes are availble in the framework: <b>bottom-spacing-1</b>, <b>bottom-spacing-2</b>, <b>bottom-spacing-3</b>. In the other direction, <b>top-spacing-1</b>, <b>top-spacing-2</b>, <b>top-spacing-3</b> is available for margin top (useful in cases where an element needs spacing but is not always present on the page, such as in ajax'ed scenarios).</p>

			<div class="grid">
				<div class="column_6">
					<div class="breadcrumb">Breadcrumb ></div>
					<h1 class="heading-1">Page Title</h1>
					<h3 class="heading-3">Section Title</h3>
					<p class="paragraph">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa</p>
				</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;section&gt;
	&lt;div class="breadcrumb"&gt;Breadcrumb >&lt;div&gt;
	&lt;h1 class="heading-1"&gt;Page Title&lt;/h1&gt;
	&lt;h3 class="heading-3"&gt;Section Title&lt;/h3&gt;
	&lt;p class="paragraph"&gt;Text...&lt;/p&gt;	
&lt;/section&gt;
</code></pre>
			</div>
		</section>

		<section id="positioning">
			<h2 class="heading-2">Positioning</h2>
			<p class="paragraph">A few basic float and centering classes have been added to make styling dynamic content simpler, such as in the cases of articles or other standalone bodies of text. For centering with margin-left and margin-right set to "auto", use <b>.center-content</b> or <b>.horizontal-center</b>. The former, <b>.center-content</b>, is an older version that also includes the property display: block, and is most useful for elements that need their display property changed to make margin auto work (like images). To float an object left or right (like an image in a sea of text), <b>.float-left</b> and <b>.float-right</b>.</p>

			<p class="paragraph">As always, any situation that requires a complex solution is best off using custom css, rather than a bunch of these single property classes. Use sparingly.</p>
		</section>

		<section id="pixels">
			<h2 class="heading-2">Max-width &amp; Height</h2>
			<p class="paragraph">Sometimes it's nice to limit the width of an element, like alerts or forms. Similarly we may need to fix the height or max-height of an element, like an element that needs to be scrollable at a certain height.</p>
			<p class="paragraph">To set max-width and height use <b>.max-width-###</b> and <b>.height-###</b>, where # is any number between 100 and 800 in increments of 25.</p>
			<p class="paragraph">We use <b>max-width</b> instead of width to keep elements flexible for responsive and mobile friendly layouts.</p>

			<div class="grid">

				<div class="column_6">
					<p class="alert alert_light max-width-200 bottom-spacing-2">Set to 200px max-width</p>
					<p class="alert alert_light height-200">Set to 200px height</p>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_light max-width-200"&gt;
	&lt;p&gt;An example! ...&lt;/p&gt;
&lt;/div&gt;

&lt;div class="alert alert_light height-200"&gt;
	&lt;p&gt;An example! ...&lt;/p&gt;
&lt;/div&gt;
</code></pre>
		</section>

	</main>
</div>


<?php include '../includes/footer.php'; ?>