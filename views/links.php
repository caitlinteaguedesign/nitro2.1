<?php include '../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/links.min.css">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		
		<h1 class="heading-1">Links</h1>

		<section>
			<h2 class="heading-2">Basic links</h2>

			<section>
				<h3 class="heading-3">Default link classes</h3>
				<p class="paragraph">Nitro has a default link style class that uses the value for <b>$link-color</b> passed from the theme: <b>.link_style-default</b>. The class <b>.link</b> will strip browser defaults like text-decoration: underline.</p>
			</section>

			<section>
				<h3 class="heading-3">Links with icons</h3>
				

				<div class="grid">
					<div class="column_4">
						<p class="paragraph">Use the same method for inline icons as described on the <a href="icons.php" class="link link_style-default">Icons</a> page.</p>

						<div class="auto-grid-cols-2">
							<a href="#" class="link link_style-default bottom-spacing-1">
								<span class="icon_inline">
									<svg class="icon icon_fill" role="img" aria-label="house">
										<use href="<?php echo $SVG_PATH; ?>#icon-home" />
									</svg>
								</span>
								Click Me
							</a>

							<a href="#" class="link link_style-default">
								Click Me 
								<span class="icon_inline">
									<svg class="icon icon_fill icon_rotate90" role="img" aria-label="double arrows pointing to the right">
										<use href="<?php echo $SVG_PATH; ?>#icon-doubleCaret" />
									</svg>
								</span>
							</a>
						</div>
					</div>
<pre class="code-block column_8 code-snippet"><code class="html">&lt;a href="//location" class="link link_style-default"&gt;
	Click Me
	&lt;span class="icon_inline"&gt;
		&lt;svg class="icon icon_fill icon_rotate90" role="img" aria-label="double arrows pointing to the right"&gt;
			&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-doubleCaret"/&gt;
		&lt;/svg&gt;
	&lt;/span&gt;
&lt;/a&gt;
</code></pre>		
				</div>
			</section>
		
		</section>

		<section>
			<h2 class="heading-2">Pointer Cursors on Other Elements</h2>
			<p class="paragraph">Cosmetically add the <b>cursor: pointer</b> onto elements that don't have that attribute inherently. Often set specifically on elements in css, so this is more of a temporary cheat for unique situations. Class: <b>.pointer-cursor</b>.</p>

			<div class="grid">
				<p class="column_6 pointer-cursor alert alert_light">
					Hover over me
				</p>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="pointer-cursor"&gt;
	&lt;!-- content --&gt;
&lt;/div&gt;
</code></pre>				
			
			</div>
		</section>	

		<section>
			<h2 class="heading-2">Make Links Fill their Parent</h2>

			<p class="paragraph">By default links are inline and only take up as much space a they are wide and tall. They will also ignore vertical padding, and as illustrated below will disrespect layout. To expand the size of a link to fill its parent, like in the case of a set of a links that are "tabbed", apply <b>.link_full</b> to the <b>&lt;a&gt;</b> tag.</p>

			<p class="paragraph">In the example below, the margin above left set of tabs is missing and the padding-top and padding-bottom properties have no effect.</p>

			<div class="grid">
				<div class="column_3">
					<p class="paragraph">so disrespectful</p>
					<ul class="flex">
						<li class="bg-color">
							<a href="" class="bg-color-pad link">Tab1</a>
						</li>
						<li class="bg-color">
							<a href="" class="bg-color-pad link">Tab2</a>
						</li>
						<li class="bg-color">
							<a href="" class="bg-color-pad link">Tab3</a>
						</li>
					</ul>
				</div>					
				<div class="column_3">
					<p class="paragraph">much better</p>
					<ul class="flex">
						<li class="bg-color">
							<a href="" class="bg-color-pad link link_full">Tab1</a>
						</li>
						<li class="bg-color">
							<a href="" class="bg-color-pad link link_full">Tab2</a>
						</li>
						<li class="bg-color">
							<a href="" class="bg-color-pad link link_full">Tab3</a>
						</li>
					</ul>
				</div>	
<pre class="code-block column_6 code-snippet"><code class="html">&lt;a href="" class="link link_full"&gt;
	Tab1
&lt;/a&gt;
</code></pre>						
			</div>	
		</section>	

	</main>
</div>

<?php include '../includes/footer.php'; ?>