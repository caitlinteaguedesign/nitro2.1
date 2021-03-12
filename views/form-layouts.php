<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Form Layouts</h1>

		<p class="paragraph">Putting all the form elements together. Alternative layouts and backgrounds.</p>

		<p class="paragraph">Jump to section: <a class="link link_style-default" href="#all-together">All Together</a>, <a class="link link_style-default" href="#form-bgs">Form Design Options</a>, <a class="link link_style-default" href="#form-text">Form Design Options</a>, <a class="link link_style-default" href="#multi">Multi-column Grid Layouts</a>, and <a class="link link_style-default" href="#inline">Single-line Flex Layouts</a>.</p>

		<section id="all-together" class="code-examples">

			<h2 class="heading-2 code-examples__span">All Together</h2>

			<form class="form form_layout-grid form_color-default form_border">
				<div class="field-group">	
					<label class="label">Name</label>
					<input type="text" class="input" placeholder="Type name">
				</div>
				<div class="field-group">	
					<label class="label">Email</label>
					<input type="email" class="input" placeholder="Enter email">
				</div>
				<div class="button-group">	
					<button type="submit" class="button button_color-theme">Click Me</button>
					<button type="button" class="button button_color-default">Cancel</button>
				</div>						
			</form>

<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_layout-grid form_color-default form_border"&gt;
	&lt;div class="field-group"&gt;	
		&lt;label class="label"&gt;Name&lt;/label&gt;
		&lt;input type="text" class="input" placeholder="Type Text"&gt;
	&lt;/div&gt;
	&lt;div class="field-group"&gt;	
		&lt;label class="label"&gt;Email&lt;/label&gt;
		&lt;input type="email" class="input" placeholder="Type Text"&gt;
	&lt;/div&gt;
	&lt;div class="button-group"&gt;	
		&lt;button type="submit" class="button button_color-theme"&gt;Click M>&lt;/button&gt;
		&lt;button type="button" class="button button_color-default"&gt;Cance>&lt;/button&gt;
	&lt;/div&gt;	
&lt;/form&gt;
</code></pre>		
		</section>

		<section id="form-bgs" class="code-examples">
			<h2 class="heading-2 code-examples__span">Form Design Options</h2>

			<p class="paragraph code-examples__span">A few default style choices include: a 1px solid border, drop shandow, and rounded corners. These classes can be used on a <b>form</b> tag or on a <b>div</b> within the form. Colors determined by a separate color class, <b>.form_color-default</b> provides a basic gray color scheme. The block class <b>.form</b> at this stage just provides padding (useful for layouts with borders and shadows), and provides context for the other classes, but is not required on all <b>form</b> elements.</p>

			<form class="form form_layout-grid form_color-default form_border"></form>
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_color-default form_border"&gt;
	&lt;!-- form content</span> --&gt;
&lt;/form&gt;
</code></pre>

			<form class="form form_layout-grid form_color-default form_shadow form_rounded"></form>
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_color-default form_shadow form_rounded"&gt;
	&lt;!-- form content</span> --&gt;
&lt;/form&gt;
</code></pre>		

		</section>		

		<section id="form-text" class="code-examples">

			<h2 class="heading-2 code-examples__span">Form Text Options</h2>

			<div role="presentation">
				<p class="paragraph">Section headings available with <b>.form__heading</b>, useful for labeling groups of form fields.</p>
				<p class="paragraph">For label qualifiers (like optional, required) use <b>.label__helper</b>.</p>
				<p class="paragraph">For additional information, use <b>.field-group__description</b>.</p>

				<form class="form form_layout-grid form_color-default form_border">
					<div class="form__heading">Fieldset Name</div>
					<div class="field-group">	
						<label class="label">
							Name
							<span class="label__helper">(optional)</span>
						</label>
						<input type="text" class="input" placeholder="Type name">
						<div class="field-group__validation">Error</div>
					</div>
					<div class="field-group">	
						<label class="label">Email</label>
						<p class="field-group__description">More info about this field</p>
						<input type="email" class="input" placeholder="Enter email">
					</div>
				</form>
			</div>

<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_color-default form_border"&gt;
	&lt;div class="form__heading"&gt;Fieldset Name&lt;/div&gt;
	
	&lt;div class="field-group"&gt;
		&lt;label class="label"&gt;
			Name
			&lt;span class="label__helper"&gt;(optional)&lt;/span&gt;
		&lt;/label&gt;
		&lt;input type="text" class="input" placeholder="Type name"&gt;
		&lt;div class="field-group__validation"&gt;Error&lt;/div&gt;
	&lt;/div&gt;

	&lt;div class="field-group"&gt;
		&lt;label class="label"&gt;Email&lt;/label&gt;
		&lt;p class="field-group__description"&gt;More info about this field&lt;/p&gt;
		&lt;input type="email" class="input" placeholder="Enter email"&gt;
	&lt;/div&gt;
&lt;/form&gt;
</code></pre>	

		</section>

		<section id="multi" class="code-examples">

			<h2 class="heading-2 code-examples__span">Multi-column Grid Layouts</h2>

			<div role="presentation">
				<p class="paragraph">CSS Grid does an interesting thing where it can calculate columns needed depending on the properties of the elements inside of a grid element. In this case we're using the grid-column property with a <b>span</b> value on the fields to build a unique grid. With this method the max number of columns is based on the element with the largest span. In this example, since we have an element with span 4, there are four columns.</p>
				<p class="paragraph">Use <b>.form_layout-grid</b> on the parent element. On the children, usually <b>.field-group</b> and <b>.button-group</b>, add <b>.form_layout-grid__span-#</b> where <b>#</b> is any value 1-4. If a form or set of fields requires more than four columns, chances are the design of the form needs rethinking. As forms grow in complexity opt for custom css solutions.</p>
				<p class="paragraph">Order of the elements is determined by html, so which "row" the element appears in depends on the number of ocolumns and the number of columns each element spans (i.e. it is possible to create gaps if the elements don't "fit", like if a span-4 follows a span-2 in a four column layout).</p>
				<p class="paragraph">Since the default behavior of an element is to span one column, <b>.form_layout-grid__span-1</b> is not required.</p>

				<form class="form form_color-default form_layout-grid form_shadow">
					<div class="field-group">
						<label class="label">Default</label>
						<input type="text" class="input">	
					</div>							
					<div class="field-group form_layout-grid__span-1">
						<label class="label">__span-1</label>
						<input type="text" class="input">	
					</div>
					<div class="field-group form_layout-grid__span-2">
						<label class="label">__span-2</label>
						<input type="text" class="input">	
					</div>	

					<div class="field-group form_layout-grid__span-3">
						<label class="label">__span-3</label>
						<input type="text" class="input">	
					</div>	
					<div class="field-group form_layout-grid__span-1">
						<label class="label">__span-1</label>
						<input type="text" class="input">	
					</div>

					<div class="field-group form_layout-grid__span-2">
						<label class="label">__span-2</label>
						<input type="text" class="input">	
					</div>

					<div class="field-group form_layout-grid__span-4">
						<label class="label">__span-4</label>
						<input type="text" class="input">	
					</div>	

					<div class="button-group form_layout-grid__span-4">
						<button type="button" class="button button_color-default">Button</button>
					</div>
				</form>
			</div>

<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_color-default form_layout-grid form_shadow"&gt;
	&lt;div class="field-group"&gt;
		&lt;label class="label"&gt;Default&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;							
	&lt;div class="field-group form_layout-grid__span-1"&gt;
		&lt;label class="label"&gt;__span-1&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;
	&lt;div class="field-group form_layout-grid__span-2"&gt;
		&lt;label class="label"&gt;__span-2&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;	

	&lt;div class="field-group form_layout-grid__span-3"&gt;
		&lt;label class="label"&gt;__span-3&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;	
	&lt;div class="field-group form_layout-grid__span-1"&gt;
		&lt;label class="label"&gt;__span-1&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;

	&lt;div class="field-group form_layout-grid__span-2"&gt;
		&lt;label class="label"&gt;__span-2&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;

	&lt;div class="field-group form_layout-grid__span-4"&gt;
		&lt;label class="label"&gt;__span-4&lt;/label&gt;
		&lt;input type="text" class="input"&gt;	
	&lt;/div&gt;	

	&lt;div class="button-group form_layout-grid__span-4"&gt;
		&lt;button class="button button_color-default"&gt;Button&lt;/button&gt;
	&lt;/div&gt;
&lt;/form&gt;
</code></pre>

		</section>

		<section id="inline" class="code-examples">
			<h2 class="heading-2 code-examples__span">Single-line Flex Layouts</h2>

			<p class="paragraph code-examples__span">Typically used when we have a form with only a few elements and we want it to take up as little vertical space as possible. Adding class <b>.form_layout-flex__noflex</b> to an element inside the layout will prevent it from line wrapping (which may be desireable in labels and buttons).</p>
	
			<form class="form form_layout-flex form_color-default">
				<label class="label">Search</label>
				<input type="text" class="input" placeholder="Type Text">
				<button type="button" class="button button_color-theme form_layout-flex__noflex">Click Me</button>			
			</form>
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_layout-flex form_color-default"&gt;
	&lt;label class="label"&gt;Search&lt;/label&gt;
	&lt;input type="text" class="input" placeholder="Type Text"&gt;
	&lt;button type="button" class="button button_color-theme form_layout-flex__noflex"&gt;Click Me&lt;/button&gt;			
&lt;/form>
</code></pre>		

			<form class="form form_layout-flex form_color-default">
				<label class="label form_layout-flex__noflex">Credit Card</label>
			
				<input type="number" min="0000" max="9999" inputmode="numeric" placeholder="XXXX" class="input">
				<input type="number" min="0000" max="9999" inputmode="numeric" placeholder="XXXX" class="input">
				<input type="number" min="0000" max="9999" inputmode="numeric" placeholder="XXXX" class="input">
				<input type="number" min="0000" max="9999" inputmode="numeric" placeholder="XXXX" class="input">

				<button type="button" class="button button_color-theme">Submit</button>

			</form>	
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_layout-flex form_color-default"&gt;
	&lt;label class="label form_layout-flex__noflex"&gt;Enter Credit Card Number&lt;/label&gt;

	&lt;input type="number" class="input"&gt;
	&lt;!-- x3 ... etc --&gt;

	&lt;button type="button" class="button button_color-theme"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</code></pre>		

			<form class="form form_layout-flex form_color-default">
				<label class="form_layout-flex__noflex">Choose a number</label>

				<select class="select max-width-100">
					<option>1</option>
					<option>2</option>
				</select>

				<input class="input" type="text" cplaceholder="Type Text">
			</form>				
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_layout-flex"&gt;
	&lt;label class="form_layout-flex__noflex"&gt;Choose a number&lt;/label&gt;
	&lt;select class="select max-width-100"&gt;
		&lt;option&gt;1&lt;/option&gt;
		&lt;!-- ... --&gt;
	&lt;/select&gt;	
	&lt;input class="input" type="text" placeholder="Type Text"&gt;
&lt;/form&gt;
</code></pre>

			<p class="paragraph code-examples__span"><b>.form_layout-flex-column</b>, an alternative to the single column grid layout (sometimes necessary with rude elements that don't resize like Google's reCaptcha)</p>

			<form class="form form_layout-flex-column form_color-default">
				<div class="field-group">
					<label class="label">Username</label>
					<input class="input" type="text" name="form-login" autocomplete="off" placeholder="Username or email address"  />
				</div>
				<div class="field-group"> 
					<label class="label">Password</label>
					<input class="input" type="password" name="form-pass" autocomplete="off" />
				</div>
				<div class="button-group">
					<button type="submit" name="Submit5" value="Log In" class="button button_rounded button_color-default">Log in</button>
				</div> 
			</form>				
<pre class="code-block code-snippet"><code class="html">&lt;form class="form form_layout-flex-column form_color-default"&gt;
	&lt;div class="field-group"&gt;
		&lt;label class="label"&gt;Username&lt;/label&gt;
		&lt;input class="input" type="text" name="form-login" autocomplete="off" placeholder="Username or email address"  /&gt;
	&lt;/div&gt;
	&lt;div class="field-group"&gt; 
		&lt;label class="label"&gt;Password&lt;/label&gt;
		&lt;input class="input" type="password" name="form-pass" autocomplete="off" /&gt;
	&lt;/div&gt;
	&lt;div class="button-group"&gt;
		&lt;button type="submit" name="Submit5" value="Log In" class="button button_rounded button_color-default"&gt;Log in&lt;/button&gt;
	&lt;/div&gt; 
&lt;/form&gt;
</code></pre>

		</section>			

	</main>
</div>

<?php include '../includes/footer.php'; ?>