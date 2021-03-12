<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Read More/Show Less</h1>
		<p class="paragraph">See <b>/js/custom.js</b> for required scripts. Default styles contain a variant that places a line between the hidden content and the read more control button, <b>.read-more__button-wrapper_style-line</b>. The value on the hidden input is used to determine the max height in pixels. If this value is greater than the height of the content, the read more button will be hidden.</p>

		<div class="grid bottom-spacing-1">

			<div class="column_6 read-more">
				<div class="read-more__content" id="unique_1">
					<input type="hidden" value="100" id="unique_1_px">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis pretium varius. Ut non tincidunt nunc. Phasellus tempus sem at maximus pretium. Aenean commodo lorem ac magna pulvinar, ac iaculis sem tristique. Vestibulum at quam sit amet enim laoreet posuere sed id sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere felis ut vulputate vol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis pretium varius. Ut non tincidunt nunc. Phasellus tempus sem at maximus pretium. Aenean commodo lorem ac magna pulvinar, ac iaculis sem tristique. Vestibulum at quam sit amet enim laoreet posuere sed id sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere felis ut vulputate vol.</p>
					<div class="read-more__fade" id="fade-unique_1"></div>
				</div>
				<div class="read-more__button-wrapper" id="button-wrapper-unique_1">
					<button type="button" class="read-more__button button button_color-default" href="#" id="button-unique_1">Read More</button>
				</div>	
			</div>		

			<div class="column_6 read-more">
				<div class="read-more__content" id="unique_2">
					<input type="hidden" value="190" id="unique_2_px">
					<p class="paragraph">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself</p>
					<div class="read-more__fade" id="fade-unique_2"></div>
				</div>
				<div class="read-more__button-wrapper read-more__button-wrapper_style-line" id="button-wrapper-unique_2">
					<button type="button" class="read-more__button button button_color-default" href="#" id="button-unique_2">Read More</button>
				</div>	
			</div>

		</div>

<pre class="code-block code-snippet"><code class="html">&lt;div class="read-more"&gt;
	&lt;div class="read-more__content" id="unique_1"&gt;
		&lt;input type="hidden" value="50" id="unique_1_px"&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis pretium varius. 
		Ut non tincidunt nunc. Phasellus tempus sem at maximus pretium...&lt;/p&gt;
		&lt;div class="read-more__fade" id="fade-unique_1">&lt;/div&gt;
	&lt;/div>
	&lt;div class="read-more__button-wrapper read-more__button-wrapper_style-line" id="button-wrapper-unique_1"&gt;
		&lt;button type="button" class="read-more__button button button_color-default" id="button-unique_1"&gt;Read More&lt;/button&gt;
	&lt;/div&gt;	
&lt;/div&gt;
</code></pre>		
	
	</main>

</div>

<?php include '../../includes/footer.php'; ?>