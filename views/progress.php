<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Progress Bars</h1>
		<p class="paragraph">Custom classes for styling progress bars. Does not work in Edge or IE, so use with caution (i.e. the content on the page should not be dependent on these colors to communcate essential information or function).</p>	

		<div class="grid">
			<div class="column_4">
				<p class="paragraph">Default appearance, indefinite</p>
				<progress class="bottom-spacing-1"></progress>	
				<p class="paragraph">Default appearance, definite</p>
				<progress class="bottom-spacing-1" max="100" value="50"></progress>
				<p class="paragraph">Basic progress with <b>.progress</b> class</p>
				<progress class="progress" max="100" value="50"></progress>
			</div>

<pre class="code-block column_8 code-snippet"><code class="html">&lt;progress class="progress" max="#" value="#"&gt;&lt;/progress&gt;
</code></pre>	
		</div>

		<section>
			<h2 class="heading-2">Basic Colors</h2>

			<p class="paragraph">Basic progress bar colors. Theme based on the <b>$default-text-color</b> value.</p>

			<div class="grid">

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-theme</b></p>
					<progress class="progress progress_color-theme" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-neutral</b></p>
					<progress class="progress progress_color-neutral" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-red</b></p>
					<progress class="progress progress_color-red" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-orange</b></p>
					<progress class="progress progress_color-orange" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-yellow</b></p>
					<progress class="progress progress_color-yellow" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-green</b></p>
					<progress class="progress progress_color-green" max="100" value="50"></progress>
				</div>

				<div class="column_3">
					<p class="paragraph"><b>.progress_color-blue</b></p>
					<progress class="progress progress_color-blue" max="100" value="50"></progress>
				</div>
					
				<div class="column_3">
					<p class="paragraph"><b>.progress_color-purple</b></p>
					<progress class="progress progress_color-purple" max="100" value="50"></progress>
				</div>
			</div>
		</section>

		<section>
			<h2 class="heading-2">Stripes &amp; Gradients</h2>

			<p class="paragraph">For gradients, use <b>.progress_color-gradient-{color name}</b>. For striped variants, use <b>.progress_color-striped-gradient-{color name}</b>.</p>

			<div class="grid">
				<div class="column_4">
					<p class="paragraph"><b>gray</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-gray" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-gray" max="100" value="75"></progress>
				</div>
				<div class="column_4">
					<p class="paragraph"><b>darkgray</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-darkgray" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-darkgray" max="100" value="75"></progress>
				</div>
				<div class="column_4">
					<p class="paragraph"><b>mint</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-mint" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-mint" max="100" value="75"></progress>
				</div>
				<div class="column_4">
					<p class="paragraph"><b>candycane</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-candycane" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-candycane" max="100" value="75"></progress>
				</div>
				<div class="column_4">
					<p class="paragraph"><b>cool</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-cool" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-cool" max="100" value="75"></progress>
				</div>
				<div class="column_4">
					<p class="paragraph"><b>warm</b></p>
					<progress class="bottom-spacing-1 progress progress_color-striped-gradient-warm" max="100" value="50"></progress>
					<progress class="progress progress_color-gradient-warm" max="100" value="75"></progress>
				</div>
			</div>
			
		</section>		

		<section>
			<h2 class="heading-2">Non-linear progress bars</h2>
			<p class="paragraph">Requires a parent div with class <b>.nonlinear-progress</b> around two progress bars, the first to represent the negative value and the second the positive value. For display purposes, a negative value must be converted to a positive when adding it to the progress' value attribute.</p>

			<div class="grid">
				<div class="column_4">

					<p class="paragraph"><b>negative</b> / <b>positive</b></p>
					<div class="nonlinear-progress bottom-spacing-1">
						<progress class="progress progress_color-negative" max="100" value="50"></progress>
						<progress class="progress progress_color-positive" max="100" value="50"></progress>
					</div>

					<p class="paragraph"><b>neutral</b> / <b>blue</b></p>
					<div class="nonlinear-progress">
						<progress class="progress progress_color-neutral" max="100" value="25"></progress>
						<progress class="progress progress_color-blue" max="100" value="75"></progress>
					</div>
				</div>
			
<pre class="code-block column_8 code-snippet"><code class="html">&lt;div class="nonlinear-progress"&gt;
	&lt;progress class="progress progress_color-negative" max="#" value="#"&gt;&lt;/progress&gt;
	&lt;progress class="progress progress_color-positive" max="#" value="#"&gt;&lt;/progress&gt;
&lt;/div&gt;
</code></pre>		
			</div>
		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>		