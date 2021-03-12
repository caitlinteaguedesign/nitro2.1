<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Tooltips</h1>
		<p class="paragraph">See <b>/js/custom.js</b> for required scripts.</p>

		<div class="grid bottom-spacing-1">
			<div class="column_4 field-group">	
				<label class="label label_flex">
					Do The Thing!
					<button type="button" id="show-thisTool" class="toggle-tooltip toggle-tooltip_color-theme toggle-tooltip_type-icon" title="Click to show more information">
						<svg class="icon icon_fill" role="img" aria-label="question mark">
							<use href="<?php echo $SVG_PATH; ?>#icon-hint"></use>
						</svg>
					</button>
					<div id="thisTool" class="hidden-tooltip">
						Helpful tips on how to do a thing.
					</div>
				</label>
				<input type="text" class="input" placeholder="The tooltop uses an icon">
			</div>
			
			<div class="column_4 field-group">
				<label class="label label_flex">
					Do Another Thing!
					<button type="button" id="show-thisTool2" class="toggle-tooltip toggle-tooltip_color-theme toggle-tooltip_type-text" title="Click to show more information">?</button>
					<div id="thisTool2" class="hidden-tooltip">
						Helpful tips on how to do a thing.
					</div>
				</label>
				<input type="text" class="input" placeholder="This tooltip uses an html fallback">
			</div>	
		</div>
			   
<pre class="code-block code-snippet"><code class="html">&lt;!-- tooltips with inline svg icon --&gt;
&lt;button type="button" id="show-thisTool" class="toggle-tooltip toggle-tooltip_color-theme toggle-tooltip_type-icon" title="Click to show more information"&gt;
	&lt;svg class="icon icon_fill" role="img" aria-label="question mark"&gt;
		&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-hint"&gt;&lt;/use&gt;
	&lt;/svg&gt;
&lt;/button&gt;
&lt;div id="thisTool" class="hidden-tooltip"&gt;
   Helpful tips on how to do a thing
&lt;/div&gt;

&lt;!-- tooltips with html --&gt;
&lt;button type="button" id="show-thisTool2" class="toggle-tooltip toggle-tooltip_color-theme toggle-tooltip_type-text" title="Click to show more information"&gt;?&lt;/button&gt;
&lt;div id="thisTool2" class="hidden-tooltip"&gt;
   Helpful tips on how to do a thing
&lt;/div&gt;
</code></pre>	

	</main>

</div>

<?php include '../../includes/footer.php'; ?>		