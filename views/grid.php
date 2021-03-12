<?php include '../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/grid.min.css">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Grid System</h1>

		<p class="paragraph">The grid system is largely for laying out specific sections within a page. Unique areas like headers, sidebars, footers and the relationship of the main column to those elements are usually defined with custom css. For examples with annotation, see the <a class="link link_style-default" href="//leerburg.com/nitro/views/quickstart.php">Quick Start Guide</a>. The grid system is now <em>optional</em> and a tool to use for quick and simple layouts. This version of the grid system reflects better accessibility practices and gives web designers more options.</p>

		<p class="paragraph">The <b>&lt;body&gt;</b> contains attributes that make the page span the height of the screen even if the content is too short (you won't see weird empty bottoms after the footer). The layout of the content starts with the <b>.container</b>. The container will have properties like the page's max-width and horizontal centering, and <b>role="presentation"</b> for the accesibility tree. The <b>.container</b> can be modified in project level code for additional layout rules (like handling page content area in relation to navigation areas).</p>
		
		<p class="paragraph">Inside the <b>.container</b> comes the <b>&lt;main&gt;</b>. This element represents the unique content on the page, and is sometimes sibling to a sidebar or other repeating element, hence the name "main". The class <b>.main</b> contains important css reset rules.</p>

		<p class="paragraph">The basic building blocks of the grid layout uses <b>.grid</b> 's and <b>.column-##</b> 's, where ## is 1 through the total number of columns in the layout (Nitro uses 12). For two columns in a 12-column layout, use two <b>.column-6</b>; In this instance the number refers to the number of columns the element spans across, so all <b>.column-##</b> in a row should add up to the total number of columns (ex: 6 + 6 = 12). See more examples below.</p>

		<p class="paragraph">In Nitro 1.0 a dedicated div with the <b>.column-##</b> was required, but in this version the column class can go on a single block element directly. An additional element for "rows" is also no longer required, CSS grid will handle all that logic on its own.</p>

		<div class="grid grid_demo">
			<div class="column_6 demoCol">.column_6</div>
			<div class="column_6 demoCol">.column_6</div>
			<div class="column_10 demoCol">.column_10</div>	
			<div class="column_2 demoCol">.column_2</div>
			<div class="column_3 demoCol">.column_3</div>
			<div class="column_9 demoCol">.column_9</div>	
		</div>

<pre class="code-block code-snippet"><code class="html">&lt;div class="grid"&gt;
	
	&lt;div class="column_6"&gt;Spans 6 columns&lt;/div&gt;

	&lt;div class="column_6"&gt;Spans 6 columns&lt;/div&gt;

	&lt;div class="column_10"&gt;Spans 10 columns&lt;/div&gt;

	&lt;div class="column_2"&gt;Spans 2 columns&lt;/div&gt;

	&lt;div class="column_3"&gt;Spans 3 columns&lt;/div&gt;

	&lt;div class="column_9"&gt;Spans 9 columns&lt;/div&gt;

&lt;/div&gt;	
</code></pre>	

		</section>	
		
		<section>
			<h2 class="heading-2">A Note on Responsive Web</h2>
			<p class="paragraph">The grid system in not inheritantly responsive and must be set manually. Complex layouts may require custom solutions, the use of <b>.grid</b> should be limited to simple implementations.</p>
		</section>

		<section>
			<h2 class="heading-2">Complex Demo</h2>
			<p class="paragraph">As noted above, responsive design in this example is set manually. Custom styling was added to center the circle in its row, and to make the bottom row height match the height of the top row. Additionally, the margin top of the <b>.heading-3</b> was overridden with a contextual class.</p>

			<div class="grid grid_complex-demo">

				<div class="column_4">
					<h3 class="heading-3 grid_complex-demo__heading">A Section Heading</h3>
					<p>by <a class="link link_style-default" href="#">A. Developer</a></p>
				</div>

				<div class="column_8 demoObj"></div>

				<p class="column_4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</p>

				<p class="column_4">Curabitur nibh ligula, porta non neque volutpat, gravida porta risus. Nullam eros eros, dictum sed sagittis sit amet, bibendum vel orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus tortor tortor, hendrerit sit amet efficitur nec, consectetur nec felis. Vivamus fringilla mauris et tortor volutpat faucibus. Curabitur at purus eget leo venenatis.</p>


				<div class="column_4 demoChart"></div>

				<div class="column_8 demoObj"></div>
				
				<div class="column_4 demoObj"></div>

			</div>

<pre class="code-block code-snippet"><code class="html">&lt;div class="grid"&gt;
	&lt;div class="column_4"&gt;
		&lt;h3 class="heading-3"&gt;A Section Heading&lt;/h3&gt;
		&lt;p&gt;by &lt;a href="#"&gt;A. Developer&lt;/a&gt;&lt;/p&gt;
	&lt;/div&gt;

	&lt;div class="column_8 demoObj"&gt;&lt;/div&gt;

	&lt;p class="column_4"&gt;Lorem ipsum...&lt;/p&gt;

	&lt;p class="column_4"&gt;Curabitur...&lt;/p&gt;

	&lt;div class="column_4 demoChart"&gt;&lt;/div&gt;

	&lt;div class="column_8 demoObj"&gt;&lt;/div&gt;

	&lt;div class="column_4 demoObj"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>