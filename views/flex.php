<?php include '../includes/header.php'; ?>

<!-- <link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/grid.min.css"> -->

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

      <h1 class="heading-1">Flex Layouts</h1>
      <p class="paragraph">A few flex classes for simple scenarios. In some cases it is better to write custom css rather than use these strategies. Custom solutions means less markup in the html and more control (like setting gap and other flex options).</p>

      <section id="center">
			<h2 class="heading-2">Justify Content to Center or End</h2>
			
			<div class="grid">

				<div class="column_6">
               
               <p class="paragraph">All content defaults to justify left or justify start (left edge). Here's a method for justifying an element to the center or end (right edge) on the fly. Classes: <b>flex_justify-content-center</b> and <b>flex_justify-content-end</b>.</p>

					<div class="flex bottom-spacing-1">
						<p class="alert alert_light">Default</p>
					</div>

					<div class="flex bottom-spacing-1 flex_justify-content-center">
						<p class="alert alert_light">Justify center</p>
					</div>

					<div class="flex flex_justify-content-end">
						<p class="alert alert_light">Justify end</p>
					</div>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="flex"&gt;
	&lt;p class="alert alert_light"&gt;Default&lt;/p&gt;
&lt;/div&gt;

&lt;div class="flex flex_justify-content-center"&gt;
	&lt;p class="alert alert_light"&gt;Justify center&lt;/p&gt;
&lt;/div&gt;

&lt;div class="flex flex_justify-content-end"&gt;
	&lt;p class="alert alert_light"&gt;Justify End&lt;/p&gt;
&lt;/div&gt;
</code></pre>

         </div>
      </section>

      <section id="center">
         <h2 class="heading-2">Align Items to Center or End</h2>
         
			<div class="grid">

				<div class="column_6">

               <p class="paragraph">All items default to align start (top). Here's a method for aligning items center or end (bottom). Classes: <b>flex_align-items-center</b> and <b>flex_align-items-end</b>.</p>

					<div class="flex bottom-spacing-1">
						<p class="alert alert_light height-100">Default</p>
						<p class="alert alert_light height-200">Default</p>
						<p class="alert alert_light height-150">Default</p>
					</div>

					<div class="flex bottom-spacing-1 flex_align-items-center">
						<p class="alert alert_light height-100">Align center</p>
						<p class="alert alert_light height-200">Align center</p>
						<p class="alert alert_light height-150">Align center</p>
					</div>

					<div class="flex flex_align-items-end">
						<p class="alert alert_light height-100">Align end</p>
						<p class="alert alert_light height-200">Align end</p>
						<p class="alert alert_light height-150">Align end</p>
					</div>
            </div>
            
<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="flex"&gt;
   &lt;p class="alert alert_light height-100"&gt;Default&lt;/p&gt;
   &lt;p class="alert alert_light height-200"&gt;Default&lt;/p&gt;
   &lt;p class="alert alert_light height-150"&gt;Default&lt;/p&gt;
&lt;/div&gt;

&lt;div class="flex flex_align-items-center"&gt;
   &lt;p class="alert alert_light height-100"&gt;Align center&lt;/p&gt;
   &lt;p class="alert alert_light height-200"&gt;Align center&lt;/p&gt;
   &lt;p class="alert alert_light height-150"&gt;Align center&lt;/p&gt;
&lt;/div&gt;

&lt;div class="flex flex_align-items-end"&gt;
   &lt;p class="alert alert_light height-100"&gt;Align end&lt;/p&gt;
   &lt;p class="alert alert_light height-200"&gt;Align end&lt;/p&gt;
   &lt;p class="alert alert_light height-150"&gt;Align end&lt;/p&gt;
&lt;/div&gt;
</code></pre>

			</div>

		</section>
   
   </main>

</div>

<?php include '../includes/footer.php'; ?>