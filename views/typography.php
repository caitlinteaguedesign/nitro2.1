<?php include '../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/typography.min.css">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding" aria-label="Main Content">

		<h1 class="heading-1">Typography</h1>
		<p>Helpful classes for making some content more managable.</p>

		<section>
			<h2 class="heading-2">Custom Fonts and Headings</h2>
			<p class="paragraph">Typography should be defined at the project level, and as such the framework only has a few common fonts set as default. In this documentation, we have <b>.heading-1</b>, <b>.heading-2</b>, <b>.heading-3</b>, and <b>.paragraph</b>, for examples.</p>
		</section>

		<section>
			<h2 class="heading-2">General SEO &amp; Accesibilty Notes</h2>

			<p class="paragraph">Only use one <b>&lt;h1&gt;</b> per page. It doesn't necessarily need to be the biggest text on the page, but it should concisely describe the page's content or main focus.</p>
			<p class="paragraph">Don't use other h's just as a method of setting the font size in places like buttons and navigation as it will confuse screen readers. (Looking at you, LOU 2.0.) Use <b>&lt;h2&gt;</b>, <b>&lt;h3&gt;</b>, <b>&lt;h4&gt;</b>, <b>&lt;h5&gt;</b>, and <b>&lt;h6&gt;</b> as they are intended.</p>
			<p class="paragraph">Tags like <b>&lt;strong&gt;</b> and <b>&lt;em&gt;</b> give screen readers specific instructions on how the text is said (importance, emphasis respectively). Sometimes its appropriate to use strong and em, other times it may be better just style with css. For style uses, <b>.text_bold</b> and <b>.text_italic</b> are availble, as are the semantic tags <b>&lt;b&gt;</b> and <b>&lt;i&gt;</b>.</p>

			<p class="paragraph">Text can be struck through with <b>.text_strike</b>. <span class="text_strike">Example.</span></p>

			<p class="paragraph">Text can be set to uppercase with <b>.text_uppercase</b>. <span class="text_uppercase">Example.</span> Includes letter-spacing for better legibility.</p>
		</section>

		<section>
			<h2 class="heading-2">Text Alignment</h2>

			<p class="paragraph">Text aligns to the left by default. For aligning text to the right and center, use <b>.text_align-right</b>, and <b>.text_align-center</b>.</p>		

			<div class="page-typo__3up">
				<div class="alert alert_light">
					<p>Far far away, behind the word mountains...</p>
				</div>

				<div class="alert alert_light">
					<p class="text_align-center">...Far far away, behind the word mountains...</p>
				</div>
				
				<div class="alert alert_light">
					<p class="text_align-right">...Far far away, behind the word mountains</p>
				</div>
			</div>
		</section>	

		<section>
			<h2 class="heading-2">Long Strings of Text that Escape Containers</h2>
			<p class="paragraph">Long strings have different break behavior in different browsers; this class will guarantee that long strings, like a url, will line break instead of overflowing their container. Place <b>.text_break-word</b> directly on the element that contains the text.</p>

			<div class="page-typo__2up">
				<div>
					<p class="text_bold">Without help</p>
					<div class="alert alert_info max-width-300">
						<p>http://leerburg.com/nitro/views/typography.php</p>
					</div>
				</div>

				<div>
					<p class="text_bold">With help</p>
					<div class="alert alert_info max-width-300">
						<p class="text_break-word">http://leerburg.com/nitro/views/typography.php</p>
					</div>
				</div>
			</div>	

		</section>	

		<section>
			<h2 class="heading-2">Long Strings of Text that we want to Trim to One Line</h2>
			<p class="paragraph">Place <b>.text_truncate</b> directly on the element that contains the text. Commonly used in tables where we don't really care if we can see all the text in the cell.</p>

			<div class="page-typo__2up">
				<div>
					<p><b>Without help</b></p>
					<div class="alert alert_info">
						<p>A long string of words that don't necessarily mean anything super important</p>
					</div>
				</div>
				
				<div>
					<p><b>With help</b></p>
					<div class="alert alert_info">
						<p class="text_truncate">A long string of words that don't necessarily mean anything super important</p>
					</div>
				</div>
			</div>
		</section>

		<section>
			<h2 class="heading-2">Fill Remaining Space with Ellipses</h2>
			<p class="paragraph">Place <b>.text_ellipses</b> directly on the element that contains the text. Only works for single line of text.</p>

			<div class="page-typo__3up">
				<p class="text_ellipses">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				<p class="text_ellipses">Aenean vulputate</p>
				<p class="text_ellipses">Text and stuff</p>
			</div>

		</section>			

	</main>

</div>

<?php include '../includes/footer.php'; ?>