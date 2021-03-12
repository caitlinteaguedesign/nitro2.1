<?php include '../../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../../nitro-css/build/pages/scrollable.min.css">

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>

   <main class="main global-padding">
		<h1 class="heading-1">Scrollable</h1>

		<section>
			<h2 class="heading-2">Dynamic Shadows</h2>
			<p class="paragraph">Now introducing shadows for better UX! Should the scroll fall in such a way that might imply the content has ended before it actually has, the shadows will communicate to the user that there's more content. New max-height classes are based on typographic rhythm value, with values between <b>5 - 20</b> (anything smaller than 5 seemed unnecessarily short). Append this number to class <b>.scrollable__container-#</b>.</p>

			<p class="paragraph">See <b>/js/custom.js</b> for required scripts.</p>

			<div class="grid">

				<div class="column_6 scrollable">
					<div class="scrollable__shadow scrollable__shadow-top"></div>
					<div class="scroll-example scrollable__container-8">
						<p class="scroll-example__content scrollable__content">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</div>
					<div class="scrollable__shadow scrollable__shadow-bottom"></div>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="scrollable"&gt;
	&lt;div class="scrollable__shadow scrollable__shadow-top"&gt;&lt;/div&gt;
	&lt;div class="scrollable__container-#"&gt;
		&lt;div class="scrollable__content"&gt;&lt;!-- content --&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="scrollable__shadow scrollable__shadow-bottom"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>			
			</div>
		</section>

		<section>
			<h2 class="heading-2">Basic</h2>
			<p class="paragraph">The "scrollable" feature sets the max-height and overflow: auto to the element it's applied to. To use, apply <b>.scrollable-###</b> to the element, where ### is any number between 100 and 400 in increments of 50. This method is preserved from Nitro 1.0.</p>

			<div class="grid">

				<div class="column_6 scroll-example scrollable-150">
					<p class="scroll-example__content">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="scrollable-150"&gt;
	&lt;!-- content --&gt;
&lt;/div&gt;
</code></pre>			
			</div>
		</section>

   </main>

</div>

<?php include '../../includes/footer.php'; ?>