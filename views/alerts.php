<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		
		<h1 class="heading-1">Alerts</h1>
		
		<p class="paragraph">Place <b>.alert</b> on the element to create the shape of an alert. Alert headings are optional. To add a heading use <b>.heading</b> on a div (only works if on a child of an element with .alert).</p>

		<div class="grid">

			<div class="column_6">
				<p class="paragraph"><b>.alert_info</b></p>
				<div class="alert alert_info">
					<div class="alert__heading">a simple note</div>
					<p>A simple message</p>
				</div>
			</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_info"&gt;
	&lt;div class="alert__heading"&gt;no worries&lt;/div&gt;
	&lt;p&gt;A simple message&lt;/p&gt;
&lt;/div&gt;	
</code></pre>					

			<div class="column_6">
				<p class="paragraph"><b>.alert_caution</b></p>
				<div class="alert alert_caution">
					<div class="alert__heading">ah oh</div>
					<p>Tread lightly</p>
				</div>
			</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_caution"&gt;
	&lt;div class="alert__heading"&gt;no worries&lt;/div&gt;
	&lt;p&gt;Tread lightly&lt;/p&gt;
&lt;/div&gt;	
</code></pre>			

			<div class="column_6">
				<p class="paragraph"><b>.alert_warning</b></p>
				<div class="alert alert_warning">
					<div class="alert__heading">warning</div>
					<p>Zomgoodness, you're in the danger zone!</p>
				</div>
			</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_warning"&gt;
	&lt;div class="alert__heading"&gt;no worries&lt;/div&gt;
	&lt;p&gt;Zomgoodness...&lt;/p&gt;
&lt;/div&gt;	
</code></pre>		

			<div class="column_6">
				<p class="paragraph"><b>.alert_success</b></p>
				<div class="alert alert_success">
					<div class="alert__heading">success</div>
					<p>Hooray!</p>
				</div>
			</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_success"&gt;
	&lt;div class="alert__heading"&gt;success&lt;/div&gt;
	&lt;p&gt;Hooray!&lt;/p&gt;
&lt;/div&gt;	
</code></pre>

			<div class="column_6">
				<p class="paragraph"><b>.alert_light</b></p>
				<div class="alert alert_light">
					<div class="alert__heading">whatever</div>
					<p>A simple message</p>
				</div>
			</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_light"&gt;
	&lt;div class="alert__heading"&gt;whatever&lt;/div&gt;
	&lt;p&gt;A simple message&lt;/p&gt;
&lt;/div&gt;	
</code></pre>

			<div class="column_6">
				<p class="paragraph"><b>.alert_dark</b></p>
				<div class="alert alert_dark">
					<div class="alert__heading">a thing</div>
					<p>A simple message</p>
				</div>
			</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="alert alert_dark"&gt;
	&lt;div class="alert__heading"&gt;a thing&lt;/div&gt;
	&lt;p&gt;A simple message&lt;/p&gt;
&lt;/div&gt;	
</code></pre>

		</div>	

	</main>
</div>

<?php include '../includes/footer.php'; ?>