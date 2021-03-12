<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Form Fields</h1>
		<p class="paragraph">See <a class="link link_style-default" href="form-layouts.php">Form Layouts</a> for more information on arranging fields for forms.</p>
		<p class="paragraph">Jump to section: <a class="link link_style-default" href="#basics">Inputs, Selects, &amp; Textareas</a>, <a class="link link_style-default" href="#static">Static Fields</a>, and <a class="link link_style-default" href="#boxes">Radios &amp; Checkboxes</a>.</p>

		<section id="basics" class="code-examples">
			
			<h2 class="heading-2 code-examples__span">Inputs, Selects, &amp; Textareas</h2>

			<div class="field-group">	
				<label class="label">Enter text</label>
				<input type="text" placeholder="Type Text" class="input">
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;label class="label"&gt;Enter text&lt;/label&gt;

&lt;input type="text" class="input" placeholder="Type Text"&gt;
</code></pre>

			<div class="field-group">	
				<label class="label">An input with a icon in it</label>
				<input type="text" placeholder="Type Text" class="input input--calendar-icon">
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;label class="label"&gt;Enter text&lt;/label&gt;

&lt;input type="text" class="input input--calendar-icon" placeholder="Type Text"&gt;
</code></pre>		

			<div class="field-group">	
				<label class="label">Select (with color options)</label>	
				<select class="select">
					<option value="0">Select One</option>
					<option value="1" class="select__option--red">.select__option--red</option>
					<option value="2" class="select__option--orange">.select__option--orange</option>
					<option value="3" class="select__option--yellow">.select__option--yellow</option>
					<option value="4" class="select__option--green">.select__option--green</option>
					<option value="5" class="select__option--blue">.select__option--blue</option>
					<option value="6" class="select__option--purple">.select__option--purple</option>
				</select>
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;select class="select"&gt;
	&lt;option value="0"&gt;Select One&lt;/option&gt;
	&lt;option value="1" class="select__option--red"&gt;One&lt;/option&gt;
	&lt;!-- etc ... --&gt;
&lt;/select&gt;
</code></pre>

			<div class="field-group">	
				<label class="label">Assign states to option labels</label>	
				<select class="select">
					<option value="0">Select One</option>
					<option value="1" class="select__option--disable">Disabled option</option>
					<option value="3">Normal</option>
				</select>
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;select class="select"&gt;
	&lt;option value="0"&gt;Select One&lt;/option&gt;
	&lt;option value="1" class="select__option--disable"&gt;One&lt;/option&gt;
	&lt;option value="3"&gt;Normal&lt;/option&gt;
&lt;/select&gt;
</code></pre>		

			<div class="field-group">
				<label class="label">Send us a message:</label>
				<textarea placeholder="Start typing..." class="textarea textarea_rows-4"></textarea>
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;label class="label"&gt;Send us a message:&lt;/label&gt;
&lt;!-- set height by number of rows from 3 - 10 (minimum is set to 2) --&gt;
&lt;textarea class="textarea textarea_rows-4" placeholder="Start typing..."&gt;&lt;/textarea&gt;
</code></pre>				
		</section>

		<section id="static" class="code-examples">
			
			<h2 class="heading-2 code-examples__span">Static Fields</h2>
			<p class="paragraph code-examples__span">On the occasion some fields in a form might be dynamically set or immutable. In those cases, a static field lets you show users the data within the same layout as the editable fields. Background color is set to 12.5% transparent black by default, but can be overwritten with custom css.</p>

			<form class="form_layout-grid">
				<div class="field-group">	
					<label class="label">A static field</label>	
					<div class="static-value">Static data</div>
				</div>
				<div class="field-group">	
					<label class="label">A regular field</label>	
					<input type="text" class="input">
				</div>
			</form>
					
<pre class="code-block code-snippet"><code class="html">&lt;label class="label"&gt;A static field&lt;/label&gt;	

&lt;div class="static-value"&gt;Static data&lt;/div&gt;
</code></pre>

		</section>

		<section id="boxes" class="code-examples">

			<h2 class="heading-2 code-examples__span">Radios &amp; Checkboxes</h2>

			<div class="selection-controls">	
				<label class="label selection-controls__set-label">Choose 1</label>	
				
				<div class="selection-controls__layout">

					<div class="selection-controls__pairs">
						<input type="radio" class="selection-controls__input" name="example1" id="rad-1" value="one">
						<label for="rad-1" class="selection-controls__label">Option 1</label>
					</div>

					<div class="selection-controls__pairs">
						<input type="radio" class="selection-controls__input" name="example1" id="rad-2" value="two">
						<label for="rad-2" class="selection-controls__label">Option 2</label>
					</div>

					<div class="selection-controls__pairs">
						<input type="radio" class="selection-controls__input" name="example1" id="rad-3"value="three">
						<label for="rad-3" class="selection-controls__label">Option 3</label>
					</div>

				</div>
			</div>

<pre class="code-block code-snippet"><code class="html">&lt;div class="selection-controls"&gt;
	&lt;!-- Radio buttons arranged vertically (default) --&gt;
	&lt;label class="label selection-controls__set-label"&gt;Choose 1&lt;/label&gt;

	&lt;!-- this container should hold all the options --&gt;
	&lt;div class="selection-controls__layout"&gt;
		&lt;!-- for each option --&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="radio" name="example1" id="rad-1" class="selection-controls__input" value="one"&gt;
			&lt;label for="rad-1" class="selection-controls__label"&gt;Option 1&lt;/label&gt;
		&lt;/div&gt;
		&lt;!-- end for each option --&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>			

			<div class="selection-controls">		
				<label class="label selection-controls__set-label">Choose All That Apply</label>	

				<div class="selection-controls__layout">	
					<div class="selection-controls__pairs">
						<input type="checkbox" name="example2" id="chxbx-1" value="one" class="selection-controls__input">
						<label for="chxbx-1" class="selection-controls__label">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="checkbox" name="example2" id="chxbx-2" value="two" class="selection-controls__input">
						<label for="chxbx-2" class="selection-controls__label">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget </label>
					</div>
					<div class="selection-controls__pairs">
						<input type="checkbox" name="example2" id="chxbx-3" value="three" class="selection-controls__input">
						<label for="chxbx-3" class="selection-controls__label">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</label>
					</div>
				</div>
			</div>
<pre class="code-block code-snippet"><code class="html">&lt;div class="selection-controls"&gt;
	&lt;!-- Checkboxes arranged vertically (default) --&gt;
	&lt;label class="label selection-controls__set-label"&gt;Choose All That Apply&lt;/label&gt;

	&lt;!-- this container should hold all the options --&gt;
	&lt;div class="selection-controls__layout"&gt;
		&lt;!-- for each option --&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="checkbox" name="example2" id="chxbx-1" class="selection-controls__input" value="one"&gt;
			&lt;label for="chxbx-1" class="selection-controls__label"&gt;Option 1&lt;/label&gt;
		&lt;/div&gt;
		&lt;!-- end for each option --&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>		
	
			<div class="selection-controls">	
				<label class="label selection-controls__set-label">Choose 1</label>	

				<div class="selection-controls__layout selection-controls__layout--horizontal">

					<div class="selection-controls__pairs">		
						<input type="radio" name="example3" id="rad2-1" class="selection-controls__input" value="one">
						<label for="rad2-1" class="selection-controls__label">Option 1</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="radio" name="example3" id="rad2-2" class="selection-controls__input" value="two">
						<label for="rad2-2" class="selection-controls__label">Option 2</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="radio" name="example3" id="rad2-3" class="selection-controls__input" value="three">
						<label for="rad2-3" class="selection-controls__label">Option 3</label>
					</div>

					<div class="selection-controls__pairs">		
						<input type="radio" name="example3" id="rad2-4" class="selection-controls__input" value="four">
						<label for="rad2-4" class="selection-controls__label">Option 4</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="radio" name="example3" id="rad2-5" class="selection-controls__input" value="five">
						<label for="rad2-5" class="selection-controls__label">Option 5</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="radio" name="example3" id="rad2-6" class="selection-controls__input" value="six">
						<label for="rad2-6" class="selection-controls__label">Option 6</label>
					</div>

				</div>

			</div>

<pre class="code-block code-snippet"><code class="html">&lt;div class="selection-controls"&gt;
	&lt;!-- Radio buttons arranged horizontally --&gt;
	&lt;label class="label selection-controls__set-label"&gt;Choose 1&lt;/label&gt;

	&lt;!-- this container should hold all the options --&gt;
	&lt;div class="selection-controls__layout selection-controls__layout--horizontal"&gt;
		&lt;!-- for each option --&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="radio" name="example3" id="rad2-1" class="selection-controls__input" value="one"&gt;
			&lt;label for="rad2-1" class="selection-controls__label"&gt;Option 1&lt;/label&gt;
		&lt;/div&gt;
		&lt;!-- end for each option --&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>					

			<div class="selection-controls">		
				<label class="label selection-controls__set-label">Choose All That Apply</label>

				<div class="selection-controls__layout selection-controls__layout--horizontal">

					<div class="selection-controls__pairs">		
						<input type="checkbox" name="example4" id="chxbx2-1" class="selection-controls__input" value="one">
						<label for="chxbx2-1" class="selection-controls__label">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget </label>
					</div>
					<div class="selection-controls__pairs">
						<input type="checkbox" name="example4" id="chxbx2-2" class="selection-controls__input" value="two">
						<label for="chxbx2-2" class="selection-controls__label">Lorem ipsum dolor sit amet,</label>
					</div>
					<div class="selection-controls__pairs">
						<input type="checkbox" name="example4" id="chxbx2-3" class="selection-controls__input" value="three">
						<label for="chxbx2-3" class="selection-controls__label">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</label>
					</div>

				</div>

			</div>
<pre class="code-block code-snippet"><code class="html">&lt;div class="selection-controls"&gt;
	&lt;!-- Checkboxes arranged horizontally --&gt;
	&lt;label class="label selection-controls__set-label"&gt;Choose All That Apply&lt;/label&gt;

	&lt;!-- this container should hold all the options --&gt;
	&lt;div class="selection-controls__layout selection-controls__layout--horizontal"&gt;
		&lt;!-- for each option --&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="checkbox" name="example4" id="chxbx2-1" class="selection-controls__input" value="one"&gt;
			&lt;label for="chxbx2-1" class="selection-controls__label"&gt;Option 1&lt;/label&gt;
		&lt;/div&gt;
		&lt;!-- end for each option --&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>

		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>