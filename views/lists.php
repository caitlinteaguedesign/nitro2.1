<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1" class="">Lists</h1>
		<p class="paragraph">By default lists have no styling. Here are the classes for getting classic list styling back.</p>

		<section>
			<h2 class="heading-2">Basics</h2>

			<div class="grid">

				<div class="column_6">
					
					<p class="paragraph">The default appearance of lists with no css.</p>

					<div class="grid">
						<ul class="column_6">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>				
						</ul>

						<ol class="column_6">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>
						</ol>
					</div>
				</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;ol&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ol&gt;

&lt;ul&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

				<div class="column_6">
					<p class="paragraph">A basic <b>.list</b> class will strip browser defaults, add vertical spacing, and position the bullet outside and pad the left edge.</p>

					<div class="grid">
						<ul class="column_6 list">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>				
						</ul>

						<ol class="column_6 list">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>
						</ol>
					</div>
				</div>
		
<pre class="code-block column_6 code-snippet"><code class="html">&lt;ul class="list"&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ul&gt;

&lt;ol class="list"&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ol&gt;	
</code></pre>

			<div class="column_6">
					<p class="paragraph">Add <b>.list_vertical-dense</b> to tighten up the vertical rhythm.</p>

					<div class="grid">
						<ul class="column_6 list list_vertical-dense">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>				
						</ul>

						<ol class="column_6 list list_vertical-dense">
							<li>Item</li>
							<li>Item</li>
							<li>Item</li>
						</ol>
					</div>
				</div>
		
<pre class="code-block column_6 code-snippet"><code class="html">&lt;ul class="list list_vertical-dense"&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ul&gt;

&lt;ol class="list list_vertical-dense"&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ol&gt;	
</code></pre>
			</div>

		</section>

		<section>
			<h2 class="heading-2">Bullet Styles</h2>
			<p class="paragraph">All style classes begin with <b>.list_style</b>.</p>
				
			<div class="grid">
				<ul class="column_3 list list_style-circle">
					<li><b>-disc</b></li>
					<li><b>-circle</b></li>
				</ul>
				<ul class="column_3 list list_style-circle">
					<li><b>-square</b></li>
					<li><b>-decimal</b></li>
				</ul>
				<ul class="column_3 list list_style-circle">
					<li><b>-lower-roman</b></li>
					<li><b>-upper-roman</b></li>
				</ul>
				<ul class="column_3 list list_style-circle">
					<li><b>-lower-alpha</b></li>
					<li><b>-upper-alpha</b></li>
				</ul>
				
				<ul class="column_6 list list_style-disc">
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						<ul class="list list_style-circle">
							<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</li>
						</ul>
					</li>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						<ul class="list list_style-circle">
							<li>Item</li>
							<li>Item</li>
						</ul>
					</li>				
				</ul>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;ul class="list list_style-disc"&gt;
	&lt;li&gt;
		Item
		&lt;ul class="list list_style-circle"&gt;
			&lt;li&gt;Item&lt;/li&gt;
			&lt;li&gt;Item&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Item&lt;/li&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>		

				<ol class="column_6 list list_style-upper-roman">
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						<ol class="list list_style-upper-alpha">
							<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</li>
						</ol>
					</li>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						<ol class="list list_style-upper-alpha">
							<li>Item</li>
							<li>Item</li>
						</ol>
					</li>
				</ol>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;ul class="list list_style-upper-roman"&gt;
	&lt;li&gt;
		Item
		&lt;ul class="list list_style-upper-alpha"&gt;
			&lt;li&gt;Item&lt;/li&gt;
			&lt;li&gt;Item&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Item&lt;/li&gt;
	&lt;li&gt;Item&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>
			</div>		
		</section>		
	
	</main>

</div>

<?php include '../includes/footer.php'; ?>

