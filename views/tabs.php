<?php include '../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/tabs.min.css?v=2">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		
		<h1 class="heading-1">Tabs</h1>
		
		<p class="paragraph">Various "tab" styles. Can be used as links to other pages. To toggle hidden content or ajax sections, apply custom javascript and use <b>&lt;button&gt;</b> instead of <b>&lt;a&gt;</b> for accessibility. Basic and folder styles are responsive by default via horizontal scroll, and all tab styles have an custom Sass mixin for "stacking" tabs vertically for mobile screens.</p>

		<section>
			<h2 class="heading-2">Basic Tabs</h2>
			
			<p class="paragraph">To this achieve look apply class <b>.basic-tabs</b>. For colors, use <b>.basic-tabs_theme-generated</b> or a custom theme class.</p>

			<p class="paragraph">The theme class <b>.basic-tabs_theme-generated</b> generates a theme based on the value assigned to <b>$link-color</b>. Use <b>.basic-tabs__tab--current</b> for the currently selected tab and <b>.basic-tabs__tab--disabled</b> for disabled tabs. All other tabs use class <b>basic-tabs__tab--default</b> (swapping classes is easier than having them all on the element at once, competing with each other).</p>

			<p class="paragraph">For a mobile friendly version, invoke <b>.basic-tabs--mobile()</b> at the appropriate screen width in Sass.</p>

			<ul id="basic-tabs-test2" class="basic-tabs basic-tabs_theme-generated bottom-spacing-1">
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--current">Current</button>
				</li>
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--default">Tab Two</button>
				</li>
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--disabled">Disabled</button>
				</li>
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--default">Tab Four</button>
				</li>
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--default">Tab Five</button>
				</li>
				<li class="basic-tabs__list-item">
					<button type="button" class="basic-tabs__tab basic-tabs__tab--default">Tab Six</button>
				</li>
			</ul>		

			<div class="grid">						
<pre class="code-block column_7 code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;ul class="basic-tabs basic-tabs_theme-generated"&gt;
	&lt;li class="basic-tabs__list-item"&gt;
		&lt;a href="" class="basic-tabs__tab basic-tabs__tab--current"&gt;Current Tab&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="basic-tabs__list-item"&gt;
		&lt;a href="" class="basic-tabs__tab basic-tabs__tab--default"&gt;Tab Two&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="basic-tabs__list-item"&gt;
		&lt;a href="" class="basic-tabs__tab basic-tabs__tab--disabled"&gt;Disabled Tab&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>									
<pre class="code-block column_5 code-snippet"><code class="sass">/* css with sass mixin */
#basic-tabs-test {
	@media screen and (max-width: 750px) {
		@include basic-tabs--mobile();
	}
}
</code></pre>							
			</div>	
		</section>		

		<section>
			<h2 class="heading-2">Folder Tabs</h2>

			<p class="paragraph">Apply with class <b>.folder-tabs</b>. Supports up to <b>10 tabs</b> (nature of using z-index in reverse order of html :P). Uses whatever color has been assigned to <b>$link-color</b> to generate default, hover, current, and disabled state colors. Use <b>.folder-tabs__list-item--current</b> for the currently selected tab on the <b>&lt;li&gt;</b> or <b>.folder-tabs__list-item--disabled</b> for disabled tabs. All other tabs use <b>.folder-tabs__list-item--default</b>.</p>

			<ul id="folder-tabs-test1" class="folder-tabs folder-tabs_theme-generated bottom-spacing-1">
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab One</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--current">
					<button type="button" class="folder-tabs__tab">Current</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab Three</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab Four</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab Five</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab Six</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--disabled">
					<button type="button" class="folder-tabs__tab">Disabled Tab</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--disabled">
					<button type="button" class="folder-tabs__tab">Disabled Tab</button>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default">
					<button type="button" class="folder-tabs__tab">Tab Nine</button>
				</li>
			</ul>	

			<div class="grid">					
<pre class="code-block column_7 code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;ul class="folder-tabs folder-tabs_theme-generated"&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--default"&gt;
		&lt;button type="button" class="folder-tabs__tab"&gt;Tab One&lt;/button&gt;
	&lt;/li&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--current"&gt;
		&lt;button type="button" class="folder-tabs__tab"&gt;Current Tab&lt;/button&gt;
	&lt;/li&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--disabled"&gt;
		&lt;button type="button" class="folder-tabs__tab"&gt;Disabled Tab&lt;/button&gt;
	&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>

<pre class="code-block column_5 code-snippet"><code class="sass">/* css with sass mixin */
#folder-tabs-test1 {
	@media screen and (max-width: 900px) {
		@include folder-tabs--mobile();
	}
}

#folder-tabs-test2 {
	@media screen and (max-width: 700px) {
		@include folder-tabs--mobile();
	}
}
</code></pre>	 
			</div>

			<p class="paragraph">Another version of the default theme with alternating colors. Requires modifying class on tabs <b>.folder-tabs__list-item--default_color-alternate</b>. The disabled and current versions are the same as the standard default theme, and do not require the default and default_color-alternate classes.</p>
			
			<ul id="folder-tabs-test2" class="folder-tabs folder-tabs_theme-generated bottom-spacing-1">
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab One</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Two</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Three</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Four</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Five</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Six</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Seven</a>
				</li>
				<li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate">
					<a href="" class="folder-tabs__tab">Tab Eight</a>
				</li>
			</ul>	

<pre class="code-block code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;ul class="folder-tabs folder-tabs_theme-generated"&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--default folder-tabs__list-item--default_color-alternate"&gt;
		&lt;a href="" class="folder-tabs__tab"&gt;Tab One&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--current"&gt;
		&lt;a href="" class="folder-tabs__tab"&gt;Current Tab&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="folder-tabs__list-item folder-tabs__list-item--disabled"&gt;
		&lt;a href="" class="folder-tabs__tab"&gt;Disabled Tab&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>
		</section>		

		<section>
			<h2 class="heading-2">Joined Tabs</h2>
			<p class="paragraph">Create by applying class <b>.joined-tabs</b>. Uses value assigned to <b>$link-color</b> to generate a theme, <b>.joined-tabs_theme-generated</b>. Tabs are assigned <b>.joined-tabs__list-item</b> and <b>joined-tabs__list-item--default</b>. The "open" tab is assigned <b>.joined-tabs__list-item--current</b>and disabled tabs are assigned <b>.joined-tabs__list-item--disabled</b>.</p>

			<p class="paragraph">To trigger a mobile friendlier version of joined-tabs, include <b>joined-tabs--mobile()</b> at the appropriate screen width in Sass. If you have a theme with a particular border, you can pass the border value as a parameter.</p>

			<ul id="joined-tabs-test" class="joined-tabs joined-tabs_theme-generated bottom-spacing-1">
				<li class="joined-tabs__list-item joined-tabs__list-item--current">
					<a href="" class="joined-tabs__tab">Current</a>
				</li>
				<li class="joined-tabs__list-item joined-tabs__list-item--default">
					<a href="" class="joined-tabs__tab">Tab Two</a>
				</li>
				<li class="joined-tabs__list-item joined-tabs__list-item--default">
					<a href="" class="joined-tabs__tab">Tab Three</a>
				</li>
				<li class="joined-tabs__list-item joined-tabs__list-item--disabled">
					<a href="" class="joined-tabs__tab">Disabled</a>
				</li>
				<li class="joined-tabs__list-item joined-tabs__list-item--default">
					<a href="" class="joined-tabs__tab">Tab Five</a>
				</li>
			</ul>	

			<div class="grid">						
<pre class="code-block column_6 code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;ul class="joined-tabs joined-tabs_theme-generated"&gt;
	&lt;li class="joined-tabs__list-item joined-tabs__list-item--current"&gt;
		&lt;a href="" class="joined-tabs__tab"&gt;Current&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="joined-tabs__list-item joined-tabs__list-item--default"&gt;
		&lt;a href="" class="joined-tabs__tab"&gt;Tab Two&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="joined-tabs__list-item joined-tabs__list-item--disabled"&gt;
		&lt;a href="" class="joined-tabs__tab"&gt;Disabled&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;	
</code></pre>									
<pre class="code-block column_6 code-snippet"><code class="sass">/* css with sass mixin */
#joined-tabs-test {
	$border: 2px solid lighten($link-color, 10%);
	@media screen and (max-width: 850px) {
		@include joined-tabs--mobile($border);
	}
}
</code></pre>	
			</div>	

		</section>		
	</main>
</div>

<?php include '../includes/footer.php'; ?>