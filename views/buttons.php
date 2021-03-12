<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Buttons</h1>

		<section>

			<h2 class="heading-2"><b>Basic</b></h2>
			<p class="paragraph">For button, submit, and reset, use &lt;button&gt; instead of &lt;input&gt;</p>

<pre class="code-block code-snippet"><code class="html">&lt;button type="button"&gt;Click Me&lt;/button&gt;
&lt;button type="submit"&gt;Submit &amp; Save&lt;/button&gt;
&lt;button type="reset"&gt;Reset Form&lt;/button&gt;
</code></pre>	

			<p class="paragraph"><b>.button</b> controls for some default behaviors of all buttons. Use <b>.button_rounded</b> to add rounded corners.</p>
			<p class="paragraph"><b>.button_color-default</b> is a default class that makes basic gray buttons. If a button is disabled, use <b>.button_color-default--muted</b> instead.</p>

			<button type="button" class="button button_color-default">Click Me</button>
			<button type="button" class="bottom-spacing-1 button button_rounded button_color-default--muted" disabled="">Don't Click Me</button>

<pre class="code-block code-snippet"><code class="html">&lt;button type="button" class="button button_color-default"&gt;Click Me&lt;/button&gt;
&lt;button type="button" class="button button_rounded button_color-default--muted"&gt;Don't Click Me&lt;/button&gt;
</code></pre>	

		</section>

		<section>
			<h2 class="heading-2"><b>Icons</b></h2>
			<p class="paragraph">Use <b>.button_icon-only</b> for buttons that are just an icon.</p>
			
			<button type="button" class="button button_icon-only button_color-default">
				<svg class="icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-plus"></use></svg>
			</button>

			<button type="button" class="button button_icon-only button_color-default--muted">
				<svg class="icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-exMark"></use></svg>
			</button>

			<button type="button" class="bottom-spacing-1 button button_icon-only button_color-default button_rounded">
				<svg class="icon icon_fill"><use href="<?php echo $SVG_PATH; ?>#icon-pencil"></use></svg>
			</button>	

<pre class="code-block code-snippet"><code class="html">&lt;!-- buttons that are just an icon --&gt;
&lt;button type="button" class="button button_icon-only button_color-default"&gt;
	&lt;svg class="icon icon_fill"&gt;&lt;use href="<code class="php">&lt;?php echo $SVG_PATH; ?&gt;</code>#iconName"&gt;&lt;/use&gt;&lt;/svg&gt;
&lt;/button&gt;

&lt;button type="button" class="button button_icon-only button_color-default button_rounded"&gt;
	&lt;svg class="icon icon_fill"&gt;&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#iconName"&gt;&lt;/use&gt;&lt;/svg&gt;
&lt;/button&gt;
</code></pre>			
			<p class="paragraph">Use a <b>&lt;span&gt;</b> with class <b>.icon_inline</b>, just like icons in other areas of text, to include an icon with a label in a button. More details about icons found on the <a href="icons.php">Icons</a> page.</p>

			<div class="bottom-spacing-1" role="presentation">
				<button type="button" class="button button_color-default">
					<span class="icon_inline">
						<svg class="icon icon_fill" role="img" aria-label="download file">
							<use href="<?php echo $SVG_PATH; ?>#icon-download"></use>
						</svg>
					</span>
					Download
				</button>
				<button type="button" class="button button_color-default">
					<span class="icon_inline">
						<svg class="icon icon_fill icon_rotate270" role="img" aria-label="caret pointing to the left">
							<use href="<?php echo $SVG_PATH; ?>#icon-doubleCaret"></use>
						</svg>
					</span>
					Go back
				</button>
				<button type="button" class="button button_color-default">
					Watch this
					<span class="icon_inline">
						<svg class="icon icon_fill" role="img" aria-label="eye">
							<use href="<?php echo $SVG_PATH; ?>#icon-eyeball"></use>
						</svg>
					</span>
				</button>
				<button type="button" class="button button_color-default">
					Create new
					<span class="icon_inline">
						<svg class="icon icon_fill" role="img" aria-label="plus sign">
							<use href="<?php echo $SVG_PATH; ?>#icon-plus"></use>
						</svg>
					</span>
				</button>				
			</div>								
<pre class="code-block code-snippet"><code class="html">&lt;!-- An icon on the right side --&gt;
&lt;button type="button" class="button button_color-default"&gt;
	Click Me
	&lt;span class="icon_inline"&gt;
		&lt;svg class="icon icon_fill" role="img" aria-label="icon description"&gt;
			&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#iconName"&gt;&lt;/use&gt;
		&lt;/svg&gt;
	&lt;/span&gt;
&lt;/button&gt;

&lt;!-- An icon on the left side --&gt;
&lt;button type="button" class="button button_color-default"&gt;
	&lt;span class="icon_inline"&gt;
		&lt;svg class="icon icon_fill" role="img" aria-label="icon description"&gt;
			&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#iconName"&gt;&lt;/use&gt;
		&lt;/svg&gt;
	&lt;/span&gt;
	Click Me
&lt;/button&gt;
</code></pre>		

		</section>	

		<section>
			<h2 class="heading-2"><b>Input File</b></h2>

			<div class="grid">
				<p class="column_6 paragraph">Technically an input but contains "button-like" functionality. In order to implement style update, must include code that handles the FileList. Can handle "multiple" version of input file as well (place on <b>.file-select__input</b>). Colors and fonts can be changed by replacing the default style class <b>.file-select_color-default</b>.</p>

				<div class="column_6 file-select file-select_color-default">
					<input type="file" name="file" id="file" class="file-select__input"/>
					<button class="file-select__button" type="button">Choose File</button>
					<span class="file-select__label"></span>
					<button class="file-select__clear" type="button" title="clear media uploader">
						<svg class="icon icon_fill" role="img" aria-label="ex">
							<use href="<?php echo $SVG_PATH; ?>#icon-exMark" />
						</svg>
					</button>
				</div>
				
			</div>

			<section>
				<h3 class="heading-3">HTML</h3>
<pre class="code-block code-snippet"><code class="html">&lt;div class="file-select file-select_color-default"&gt;
	&lt;input type="file" name="file" id="file" class="file-select__input"/&gt;
	&lt;button class="file-select__button" type="button"&gt;Choose File&lt;/button&gt;
	&lt;span class="file-select__label"&gt;&lt;/span&gt;
	&lt;button class="file-select__clear" type="button" title="clear media uploader"&gt;
		&lt;svg class="icon icon_fill" role="img" aria-label="ex"&gt;
			&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-exMark" /&gt;
		&lt;/svg&gt;
	&lt;/button&gt;
&lt;/div&gt;
</code></pre>
			</section>	

			<section>
				<h3 class="heading-3">JavaScript</h3>
<pre class="code-block code-snippet"><code class="js">Array.prototype.forEach.call(
	document.querySelectorAll(".file-select__button"),
	function(button) {
		const hiddenInput = button.parentElement.querySelector(".file-select__input");
		const label = button.parentElement.querySelector(".file-select__label");
		const clearButton = button.parentElement.querySelector(".file-select__clear");
		const defaultLabelText = "No file selected";

		// Set default text for label
		label.textContent = defaultLabelText;

		button.addEventListener("click", function() {
			hiddenInput.click();
		});

		hiddenInput.addEventListener("change", function() {
			const filenameList = Array.prototype.map.call(hiddenInput.files, function(file) {
				return file.name;
			});

			label.textContent = filenameList.join(", ") || defaultLabelText;
			label.title = label.textContent;

			// show clear
			clearButton.style.display = "block";
		});

		clearButton.addEventListener("click", function() {
			// empty hidden input
			hiddenInput.value = '';

			// reset default text for label
			label.textContent = defaultLabelText;

			// hide clear
			clearButton.style.display = "none";
		});
	}
);
</code></pre>
			</section>

		</section>

	</main>
</div>

<script>
	Array.prototype.forEach.call(
		document.querySelectorAll(".file-select__button"),
		function(button) {
			const hiddenInput = button.parentElement.querySelector(".file-select__input");
			const label = button.parentElement.querySelector(".file-select__label");
			const clearButton = button.parentElement.querySelector(".file-select__clear");
			const defaultLabelText = "No file selected";

			// Set default text for label
			label.textContent = defaultLabelText;

			button.addEventListener("click", function() {
				hiddenInput.click();
			});

			hiddenInput.addEventListener("change", function() {
				const filenameList = Array.prototype.map.call(hiddenInput.files, function(file) {
					return file.name;
				});

				label.textContent = filenameList.join(", ") || defaultLabelText;
				label.title = label.textContent;

				// show clear
				clearButton.style.display = "block";
			});

			clearButton.addEventListener("click", function() {
				// empty hidden input
				hiddenInput.value = '';

				// reset default text for label
				label.textContent = defaultLabelText;

				// hide clear
				clearButton.style.display = "none";
			});
		}
	);
</script>

<?php include '../includes/footer.php'; ?>