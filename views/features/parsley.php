<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Parsley.js Form Validation</h1>
		
		<div class="grid bottom-spacing-1">
			<p class="column_6 paragraph">For more information, see documentation at <a class="link link_style-default" href="//parsleyjs.org/doc/index.html">parsleyjs.org</a>. To include in your project, add <b>&lt;script src="../js/parsley.min.js"&gt;</script></b> to the head or header include. Basic setup just requires <b>data-parsley-validate</b> on the form tag.</p>

<pre class="column_6 code-block code-snippet"><code class="html">&lt;form data-parsley-validate&gt;
	&lt;!-- the fields... --&gt;
&lt;/form&gt;	
</code></pre>	

			<div class="column_6">

				<p class="paragraph">For required fields, <b>"This value is required."</b> is the defualt error message. Use <b>data-parsley-required-message</b> attribute on the form tag to set a different message for that error on all fields with required. You can apply custom messages on the whole form or onto individual fields.</p>

				<form action="#" data-parsley-validate data-parsley-required-message="This field is required" class="form form_layout-grid form_color-default form_border">
					<div class="field-group">
						<label class="label">A text field</label>
						<input class="input" type="text" required>
					</div>
					<div class="field-group">
						<label class="label">An email field</label>
						<input class="input" type="email" value="not an email" data-parsley-error-message="Boop">
					</div>
					<div class="field-group">
						<label class="label">A number field</label>
						<input class="input" type="number" value="400" min="1" max="5">
					</div>
					<div class="field-group">
						<label class="label">A password field</label>
						<input class="input" type="password" required=""> 
					</div>																								
					<div class="button-group">
						<button type="submit" class="button button_color-default">Show Errors</button>	
					</div>						
				</form>

			</div>

<pre class="column_6 code-block code-snippet"><code class="html">&lt;!-- required can be implemented multiple ways --&gt;
&lt;form data-parsley-validate data-parsley-required-message="This field is required"&gt;
	&lt;div class="field-group"&gt;
		&lt;label class="label">A text field&lt;/label>
		&lt;input type="text" class="input" required&gt;
	&lt;/div&gt;
	&lt;div class="field-group"&gt;
		&lt;label class="label">An email field&lt;/label>
		&lt;input type="email" class="input" data-parsley-error-message="Boop"&gt;
	&lt;/div&gt;		
	&lt;div class="field-group"&gt;
		&lt;label class="label">A number field&lt;/label>
		&lt;input type="number" class="input" min="1" max="5"&gt;
	&lt;/div&gt;		
	&lt;div class="field-group"&gt;
		&lt;label class="label">A password field&lt;/label>
		&lt;input type="password" class="input" required=""&gt; 
	&lt;/div&gt;
&lt;/form&gt;	
</code></pre>

		</div>

		<p class="paragraph">For a field that needs a custom element to assign the error message to, like for checkboxes and radio buttons, use the attribute <b>data-parsley-errors-container</b> and assign the id of the element to it (proceed name with <b>#</b> sign). The element should be below the fields it corresponds to within the same <b>.selection-controls</b>. It should have class <b>.alt-errors</b> and a unique id.</p>

		<div class="grid">

			<form action="#" data-parsley-validate class="column_6 form form_layout-grid form_color-default form_border">

				<div class="selection-controls">
				
					<label class="label selection-controls__set-label">Choose 1</label>

					<div class="selection-controls__layout selection-controls__layout--horizontal">
						<div class="selection-controls__pairs">
							<input class="selection-controls__input" type="radio" name="example1" id="rad-1" value="one" data-parsley-errors-container="#afield_error" required="">
							<label for="rad-1" class="selection-controls__label">Option 1</label>
						</div>
						<div class="selection-controls__pairs">
							<input class="selection-controls__input" type="radio" name="example1" id="rad-2" value="two" data-parsley-errors-container="#afield_error" required="">
							<label for="rad-2" class="selection-controls__label">Option 2</label>
						</div>
					</div>

					<div id="afield_error" class="alt-errors"></div>

				</div>

				<div class="selection-controls">

					<label class="label selection-controls__set-label">Choose Any</label>

					<div class="selection-controls__layout selection-controls__layout--horizontal">
						<div class="selection-controls__pairs">
							<input class="selection-controls__input" type="checkbox" name="example2" id="check-1" value="one" data-parsley-errors-container="#afield2_error" required="">
							<label for="check-1" class="selection-controls__label">Option 1</label>
						</div>
						<div class="selection-controls__pairs">
							<input class="selection-controls__input" type="checkbox" name="example2" id="check-2" value="two" data-parsley-errors-container="#afield_error" required="">
							<label for="check-2" class="selection-controls__label">Option 2</label>
						</div>
					</div>	

					<div id="afield2_error" class="alt-errors"></div>

				</div>

				<div class="button-group">
					<button type="submit" class="button button_color-default">Show Errors</button>	
				</div>
			</form>

<pre class="column_6 code-block code-snippet"><code class="html">&lt;div class="selection-controls"&gt;
	&lt;label class="label selection-controls__set-label"&gt;Choose Any&lt;/label&gt;

	&lt;div class="selection-controls__layout selection-controls__layout--horizontal"&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="radio" name="example1" id="rad-1" value="one" data-parsley-errors-container="#afield_error" class="selection-controls__input" required=""&gt;
			&lt;label for="rad-1" class="selection-controls__label"&gt;Option 1&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class="selection-controls__pairs"&gt;
			&lt;input type="radio" name="example1" id="rad-2" value="two" data-parsley-errors-container="#afield_error" class="selection-controls__input" required=""&gt;
			&lt;label for="rad-2" class="selection-controls__label"&gt;Option 2&lt;/label&gt;
		&lt;/div&gt;
	&lt;/div&gt;	

	&lt;!-- container for error message --&gt;
	&lt;div id="afield_error" class="alt-errors"&gt;&lt;/div&gt;
&lt;/div&gt;	
</code></pre>
		
		</div>		

	</main>

</div>
<?php include '../../includes/footer.php'; ?>