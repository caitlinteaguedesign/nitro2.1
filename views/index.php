<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1" class="">File Structure</h1>			

		<section>
			<h2 class="heading-2">Framework</h2>
			<p class="paragraph">The subfolder <strong>framework</strong> contains the files that shouldn't change project to project (except for framework updates).</p>
			<ul class="list list_style-disc">
				<li>
					<b>/framework/_reset.scss</b>
					<p>Contains the standard css reset plus some custom stuff we use to reduce browser differences.</p>
				</li>
				<li>
					<b>/framework/base/</b>
					<p>Contains basic components, layout tools, and content styles. Majority of css lives here.</p>
				</li>	
				<li>
					<b>/framework/legacy/</b>
					<p>Contains legacy partials that are being phased out.</p>
				</li>	
				<li>
					<b>/framework/mixins/</b>
					<p>Helpful tools used by the framework and available to custom project files. Must be included in the stylesheet compiling file in order to access code.</p>
				</li>	
				<li>
					<b>/framework/options/</b>
					<p>Contains extra componenets that require JavaScript to run (modals, tooltips, etc). Can include all with the _bootstrap partial or individually depending on section, page, or project.</p>
				</li>	
				<li>
					<b>/framework/theme/_default.scss</b>
					<p>Contains default values for theme files. Project specific files can override these values. Contains some legacy variables that we are in the process of deprecating.</p>
				</li>				
			</ul>	
		</section>

		<section>
			<h2 class="heading-2">Project</h2>

			<div class="grid">
				<div class="column_6">
					<p class="paragraph">The subfolder <strong>project</strong> contains unique files to the project and the file with which all the css from the framework will compile with. An example might look like the following list. In a new project, the main global.scss files might look like the code on the right.</p>

					<ul class="list list_style-disc">
						<li><b>/project/global.scss</b> (compiles general framework css, the theme, and anything global)</li>
						<li><b>/project/global/</b>
							<ul class="list list_style-disc">
								<li><b>_bootstrap.scss</b> (imports all the files in this folder)</li>
								<li><b>_header.scss</b></li>
								<li><b>_footer.scss</b></li>
								<li><b>_layout.scss</b></li>
								<li><b>_typography.scss</b></li>
							</ul>	
						</li>
						<li><b>/project/commerce.scss</b> (compiles section css only with the theme and any helpers from the framework)</li>
						<li><b>/project/commerce/</b>
							<ul class="list list_style-disc">
								<li><b>_department.scss</b></li>
								<li><b>_category.scss</b></li>
								<li><b>_product.scss</b></li>
							</ul>	
						</li>
						<li><b>/project/homepage.scss</b> (compiles page css only with the theme and any helpers from the framework)</li>
						<li><b>/project/themes/</b> (contains project specific variables)
							<ul class="list list_style-disc">
								<li><b>_main.scss</b></li>
								<li><b>_admin.scss</b></li>
							</ul>	
						</li>
					</ul>
				</div>

<pre class="column_6 code-block code-snippet"><code class="sass">// ====================================
// framework - reset
@import '../framework/reset';

// framework - default theme
@import '../framework/theme/defaults';

// ====================================
// project theme
@import 'theme/main';

// ====================================
// framework
 
// tools for making other things
@import '../framework/mixins/bootstrap';

// components, layouts, content styles
@import '../framework/base/bootstrap';

// optional components, require scripts
@import '../framework/options/bootstrap';

// ====================================
// project global styles
@import 'global/bootstrap';
</code></pre>
			</div>
		</section>

		<section>
			<h2 class="heading-2">Build and Debug</h2>
			<p class="paragraph">Files compiled for production use can go in <b>build</b> directory. Files that are used for testing Sass results go in the <b>debug</b> directory.</p>
			<ul class="list list_style-disc">
				<li><b>/build/</b>
					<ul class="list list_style-disc">
						<li><b>global.min.css</b></li>
					</ul>
				</li>
				<li><b>/debug/</b> 
					<ul class="list list_style-disc">
						<li><b>global.css</b></li>
					</ul>	
				</li>
			</ul>
		</section>
		
		<section>
			<h2 class="heading-2">Third-party Libraries</h2>
			<p class="paragraph">The subfolder <strong>vendors</strong> contains unique files from third-parties that might be helpful, and vary project to project. I'm a fan of Matej Latin's Modular Scale for font sizing, and will include modular scale for web typography purposes.</p>
			<ul class="list list_style-disc">
				<li><b>/vendors/_bootsrap.scss</b> (includes all the vendor files)</li>
				<li><b>/vendors/modularscale/</b> 
					<ul class="list list_style-disc">
						<li><b>_bootstrap.scss</b> (includes all of <em>this</em> vendor's files)</li>
						<li><b>_function.scss</b></li>
						<li><b>_power.scss</b></li>
						<li><b>_respond.scss</b></li>
						<li>etc...</li>
					</ul>	
				</li>
			</ul>
		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>