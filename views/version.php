<?php include '../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Version History</h1>

		<section>

			<h2 class="heading-2">2.1 - September 2020</h2>
			
			<ul class="list list_style-disc list_vertical-dense">
				<li>Gradient and list reset mixins removed.</li>
				<li>Added <b>&lt;button&gt;</b> support for tabs.</li>
				<li>Epicmodal BEM refactor, added robust function for theme toggling.</li>
				<li>Tablesorter added.</li>
				<li>Image reset includes <b>height: auto</b> now to handle layout reflows. HTML attributes width and height now recommended for all <b>&lt;img&gt;</b> tags.</li>
				<li>Scrollable updated with dynamic shadow version</li>
				<li>Documentation added to tables for scrollable implementation, with basic method and dynamic shadow method.</li>
			</ul>		
			
		</section>

		<section>

			<h2 class="heading-2">2.0 - July 2020</h2>
			
			<ul class="list list_style-disc list_vertical-dense">
				<li>New file structure.</li>
				<li>Utilizes BEM style guide.
					<a href="https://en.bem.info/methodology/quick-start/" class="link link_style-default" target="_BLANK">
						Learn more
						<span class="icon_inline">
							<svg class="icon icon_fill" role="img" aria-label="Open in a new window">
								<use href="<?php echo $SVG_PATH; ?>#icon-arrow-box" />
							</svg>
						</span>
					</a>
				</li>
				<li>CSS Flexbox and CSS Grid options added.</li>
				<li>Improved grid system.</li>
				<li>Improved web typography and vertical rhythm.</li>
				<li>Improved documentation organization.</li>
				<li>Leerburg.com admin and public-facing on the same version of the framework (with different themes).</li>
				<li><strong>Not</strong> compatible with sites using Nitro 1.0</li>
				<li>Most recent version of Nitro 1.0 will be preserved for legacy maintenance.
					<a href="https://leerburg.com/nitro/views/index.php" class="link link_style-default" target="_BLANK">
						View documentation
						<span class="icon_inline">
							<svg class="icon icon_fill" role="img" aria-label="Open in a new window">
								<use href="<?php echo $SVG_PATH; ?>#icon-arrow-box" />
							</svg>
						</span>
					</a>
				</li>
			</ul>		
			
		</section>

		<section>

			<h2 class="heading-2">Version Tracking</h2>

			<ul class="list list_style-disc list_vertical-dense">
				<li>Leerburg.com & Beautified Admins - 2.1</li>
			</ul>
		
		</section>

	</main>
</div>

<?php include '../includes/footer.php'; ?>