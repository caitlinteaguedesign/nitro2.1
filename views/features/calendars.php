<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Date &amp; Time Pickers</h1>
		<p class="paragraph">See <b>/js/custom.js</b> for required scripts.</p>
		<p class="paragraph">Call function on id or class assigned to input. To add the calendar icon to the field, use <b>.input--calendar-icon</b>.</p>

		<section>
			<h2 class="heading-2">Datetimepicker</h2>
			<p class="paragraph">Our version of DateTimePicker has a bug where even if you only apply just the date or just the time, the field shows both (defaults to current time and date no matter what). For documentation, go to <a class="link link_style-default" href="https://xdsoft.net/jqplugins/datetimepicker/#lazyInit">DateTimePicker</a>.</p>

			<div class="grid">

				<div class="column_6">	

					<div class="field-group bottom-spacing-1">	
						<label class="label">Pick a date</label>
						<input type="text" name="adate" class="input input--calendar-icon datePicker" value="" autocomplete="off">
					</div>

					<div class="field-group">	
						<label class="label">Pick a date &amp; time</label>
						<input type="text" name="adatetime" class="input input--calendar-icon dateTimePicker" value="" autocomplete="off">
					</div>

				</div>

				<div class="column_6">
<pre class="code-block code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;input id="{custom name}" type="text" name="" class="input--calendar-icon" value="" autocomplete="off"&gt;
</code></pre>
<pre class="code-block code-snippet"><code class="js">// javascript
$("#{custom name}").datetimepicker({
	// settings
	// set timepicker or datepicker false to hide it
	<em>attribute</em>: false
});
</code></pre>	
				</div>				
			
			</div>
		</section>

		<section>
			<h2 class="heading-2">jQuery UI Datepicker</h2>

			<p class="paragraph">For default jQuery UI datepicker, read documentation on <a class="link link_style-default" href="https://jqueryui.com/datepicker/#default">jQuery UI</a>.</p>

			<div class="grid">
				<div class="column_6 field-group">	
					<label class="label">Pick a day</label>
					<input type="text" name="jquerydate" class="input input--calendar-icon datePicker-jqueryui" placeholder="MM/DD/YYYY" autocomplete="off">
				</div>

				<div class="column_6">
<pre class="code-block code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;input id="{custom name}" type="text" name="" class="input--calendar-icon" value="" autocomplete="off"&gt;
</code></pre>				
<pre class="code-block code-snippet"><code class="js">// javascript
$("#{custom name}").datepicker({
	// settings
});
</code></pre>				
				</div>				

			</div>		
		</section>

	</main>

</div>

<?php include '../../includes/footer.php'; ?>			