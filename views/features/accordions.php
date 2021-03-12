<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Accordions</h1>
		<p class="paragraph">See <b>/js/custom.js</b> for required scripts.</p>

		<div class="grid">
			<div class="column_5">
				<p class="paragraph">The most basic of accordions, stripped of any styling but the functional bits. Make different kinds of accordions to your hearts desire!</p>
				<p class="paragraph">Adding class <b>.accordion__content--visible</b> on the element with class <b>.accordion__content</b> will open/expand that section. All other sections are hidden by default.</p>

				<ul class="accordion">
					<li>
						<div class="accordion__label"><b>Click me 1</b></div>
						<div class="accordion__content accordion__content--visible">
							<p class="paragraph">The content 1...and <b>.accordion__content--visible</b></p>
						</div>
					</li>
					<li>
						<div class="accordion__label"><b>Click me 2</b></div>
						<div class="accordion__content">
							<p class="paragraph">The content 2...</p>
						</div>
					</li>
					<li>
						<div class="accordion__label"><b>Click me 3</b></div>
						<div class="accordion__content">
							<p class="paragraph">The content 3...</p>
						</div>
					</li>
				</ul>
			</div>

<pre class="column_7 code-block code-snippet"><code class="html">&lt;ul class="accordion"&gt;
	&lt;li&gt;
		&lt;div class="accordion__label"&gt;&lt;b&gt;Click me 1&lt;/b&gt;&lt;/div&gt;
		&lt;div class="accordion__content accordion__content--visible"&gt;
			&lt;p&gt;The content 1...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;div class="accordion__label"&gt;&lt;b&gt;Click me 2&lt;/b&gt;&lt;/div&gt;
		&lt;div class="accordion__content"&gt;
			&lt;p&gt;The content 2...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

			<div class="column_5">

				<p class="paragraph">Basic styling that should work for most project. Icons are helpful, this example uses a caret and also toggles <b>.icon_rotate180</b> when the onclick fires. This one uses <b>.accordion_style-basic</b> and <b>.accordion_color-light</b>.</p>

				<ul class="accordion accordion_style-basic accordion_color-light">
					<li>
						<div class="accordion__label">
							Label 1
							<svg class="accordion__label-icon icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
						</div>
						<div class="accordion__content accordion__content--visible">
							<p class="paragraph">The content 1... and <b>accordion__content--visible</b></p>
						</div>
					</li>
					<li>
						<div class="accordion__label">
							Label 2
							<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
						</div>
						<div class="accordion__content">
							<p class="paragraph">The content 2...</p>
						</div>
					</li>
					<li>
						<div class="accordion__label">
							Label 3
							<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
						</div>
						<div class="accordion__content">
							<p class="paragraph">The content 3...</p>
						</div>
					</li>
				</ul>
			</div>

<pre class="column_7 code-block code-snippet"><code class="html">&lt;ul class="accordion accordion_style-basic accordion_color-light"&gt;
	&lt;li&gt;
		&lt;div class="accordion__label"&gt;
			Label 1
			&lt;svg class="accordion__label-icon icon icon_fill"&gt;
				&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-caret" /&gt;
			&lt;/svg&gt;
		&lt;/div&gt;
		&lt;div class="accordion__content accordion__content--visible"&gt;
			&lt;p&gt;The content 1...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;div class="accordion__label"&gt;
			Label 2
			&lt;svg class="accordion__label-icon icon icon_fill icon_rotate180"&gt;
				&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-caret" /&gt;
			&lt;/svg&gt;
		&lt;/div&gt;
		&lt;div class="accordion__content"&gt;
			&lt;p&gt;The content 2...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
		
		</div>

		<section>
			<h2 class="heading-2">Alternative colors</h2>

			<div class="grid">
				<div class="column_6">
					<p class="paragraph"><b>.accordion_color-dark</b></p>
					<ul class="accordion accordion_style-basic accordion_color-dark">
						<li>
							<div class="accordion__label">
								Label 1
								<svg class="accordion__label-icon icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content accordion__content--visible">
								<p class="paragraph">The content 1...</p>
							</div>
						</li>
						<li>
							<div class="accordion__label">
								Label 2
								<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content">
								<p class="paragraph">The content 2...</p>
							</div>
						</li>
						<li>
							<div class="accordion__label">
								Label 3
								<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content">
								<p class="paragraph">The content 3...</p>
							</div>
						</li>
					</ul>
				</div>

				<div class="column_6">
					<p class="paragraph"><b>.accordion_color-theme</b> (based on <b>$link-color</b>)</p>
					<ul class="accordion accordion_style-basic accordion_color-theme">
						<li>
							<div class="accordion__label">
								Label 1
								<svg class="accordion__label-icon icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content accordion__content--visible">
								<p class="paragraph">Created with color variable defined in styles.scss. Results may vary.</p>
							</div>
						</li>
						<li>
							<div class="accordion__label">
								Label 2
								<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content">
								<p class="paragraph">The content 2...</p>
							</div>
						</li>
						<li>
							<div class="accordion__label">
								Label 3
								<svg class="accordion__label-icon icon icon_fill icon_rotate180"><use href="<?php echo $SVG_PATH; ?>#icon-caret" /></svg>
							</div>
							<div class="accordion__content">
								<p class="paragraph">The content 3...</p>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</section>
	
	</main>

</div>

<?php include '../../includes/footer.php'; ?>