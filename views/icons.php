<?php include '../includes/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/icons.min.css">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">

		<h1 class="heading-1">Icon Libraries</h1>

		<p class="paragraph">Various libraries from in-house and 3rd parties.</p>
		
		<p class="paragraph">Combine path variable (declared in php) with icon name to indicate which icon you want to use (ex: from core icons, #icon-home = <span class="icon_inline"><svg class="icon icon_fill" role="img" aria-label="example icon"><use href="<?php echo $SVG_PATH; ?>#icon-home" /></svg></span>). The value of <b>$SVG_PATH</b> is stored in the header or a config spot, and corresponds to the location of <b>core-icons.svg</b> and optional <b>?v=</b> for versioning after file changes (ex: "/web/img/core-icons.svg?v=01"). Depending on the project, an icon pack outside of Nitro may be required (for logos and custom icons).</p>

		<p class="paragraph">For accesibility, svg's must now have <b>role="img"</b> and an <b>aria-label</b>.</p>

		<p class="paragraph">Some icons may need to be rotated, for them the classes are <b>.icon_rotate90</b>, <b>.icon_rotate180</b>, and <b>.icon_rotate270</b>.</p>

		<p class="paragraph">Read the documentation on <a class="link link_style-default" href="//leerburg.com/nitro/views/forms.php#buttons">Buttons</a> to see how to use icons with text or alone in a button.</p>		

<pre class="code-block code-snippet"><code class="html">&lt;!-- basic icon --&gt;
&lt;svg class="icon" role="img" aria-label="icon description"&gt;
	&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-name" /&gt;
&lt;/svg&gt;

&lt;!-- with class for changing color of an icon (single color icons) --&gt;
&lt;svg class="icon icon_fill" role="img" aria-label="icon description"&gt;
	&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-name" /&gt;
&lt;/svg&gt;

&lt;!-- wrapper for icons placed within bodies of text --&gt;
&lt;span class="icon_inline"&gt;
	&lt;svg class="icon icon_fill" role="img" aria-label="icon description"&gt;
		&lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-name" /&gt;
	&lt;/svg&gt;
&lt;/span&gt;
</code></pre>

		<section>

			<h2 class="heading-2">Core Icons</h2>
			
			<p class="paragraph page-icon__list-preceder">Icons made custom for Leerburg. Uses <b>&lt;?php echo $SVG_PATH; ?&gt;#icon-name</b>. Good for most general uses, like on buttons, but do poorly when too small or too big. Use at 16px at least, best is 24px - 32px (examples below are set at 24px). This library uses the file <b>core-icons.svg</b>.</p>

			<div class="page-icon__lists">

				<h3 class="heading-3 page-icon__list-heading">Pointy Things</h3>
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-caret" />
					</svg>
					<div>#icon-caret</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleCaret" />
					</svg>
					<div>#icon-doubleCaret</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-arrow" />
					</svg>
					<div>#icon-arrow</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-encircledArrow" />
					</svg>
					<div>#icon-encircledArrow</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleArrow" />
					</svg>
					<div>#icon-doubleArrow</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-curvedArrow" />
					</svg>
					<div>#icon-curvedArrow</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-refresh" />
					</svg>
					<div>#icon-refresh</div>
				</div>
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-triangle" />
					</svg>
					<div>#icon-triangle</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-sort-unsorted" />
					</svg>
					<div>#icon-sort-unsorted</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-sort-up" />
					</svg>
					<div>#icon-sort-up</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-sort-down" />
					</svg>
					<div>#icon-sort-down</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Small Tangible Objects</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-pencil" />
					</svg>
					<div>#icon-pencil</div>
				</div>			
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-trashBin" />
					</svg>
					<div>#icon-trashBin</div>
				</div>
											
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-hardwareTools" />
					</svg>
					<div>#icon-hardwareTools</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-scissors" />
					</svg>
					<div>#icon-scissors</div>
				</div>									
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-paperPlane" />
					</svg>
					<div>#icon-paperPlane</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-ticket" />
					</svg>
					<div>#icon-ticket</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-books" />
					</svg>
					<div>#icon-books</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-pin" />
					</svg>
					<div>#icon-pin</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-bulb" />
					</svg>
					<div>#icon-bulb</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-litBulb" />
					</svg>
					<div>#icon-litBulb</div>
				</div>					
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-bell" />
					</svg>
					<div>#icon-bell</div>
				</div>
							
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-gear" />
					</svg>
					<div>#icon-gear</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-dogtags" />
					</svg>
					<div>#icon-dogtags</div>
				</div>
			
				<h3 class="heading-3 page-icon__list-heading">Shapes</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-pawprint" />
					</svg>
					<div>#icon-pawprint</div>
				</div>				
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-star" />
					</svg>
					<div>#icon-star</div>
				</div>		
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-plumbob" />
					</svg>
					<div>#icon-plumbob</div>
				</div>
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-linedGlobe" />
					</svg>
					<div>#icon-linedGlobe</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-hamburger" />
					</svg>
					<div>#icon-hamburger</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-indentedStacks" />
					</svg>
					<div>#icon-indentedStacks</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-plus" />
					</svg>
					<div>#icon-plus</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-minus" />
					</svg>
					<div>#icon-minus</div>
				</div>
								
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-check" />
					</svg>
					<div>#icon-check</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-encircledCheck" />
					</svg>
					<div>#icon-encircledCheck</div>
				</div>
							
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-exMark" />
					</svg>
					<div>#icon-exMark</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-hint" />
					</svg>
					<div>#icon-hint</div>
				</div>
										
				<h3 class="heading-3 page-icon__list-heading">Buildings</h3>
		
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-home" />
					</svg>
					<div>#icon-home</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-storeFront" />
					</svg>
					<div>#icon-storeFront</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-greekRevival" />
					</svg>
					<div>#icon-greekRevival</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Vehicles</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-cart" />
					</svg>
					<div>#icon-cart</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-truck" />
					</svg>
					<div>#icon-truck</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Locks &amp; Keys</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-closedKeylock" />
					</svg>
					<div>#icon-closedKeylock</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-openKeylock" />
					</svg>
					<div>#icon-openKeylock</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-key" />
					</svg>
					<div>#icon-key</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Water &amp; Liquids</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-splash" />
					</svg>
					<div>#icon-splash</div>
				</div>	
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-bubbles" />
					</svg>
					<div>#icon-bubbles</div>
				</div>	
										
				<h3 class="heading-3 page-icon__list-heading">Envelopes</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-closedEnvelope" />
					</svg>
					<div>#icon-closedEnvelope</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-openEnvelope" />
					</svg>
					<div>#icon-openEnvelope</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-reply" />
					</svg>
					<div>#icon-reply</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-replyAll" />
					</svg>
					<div>#icon-replyAll</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-twoEnvelopes" />
					</svg>
					<div>#icon-twoEnvelopes</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Calendars</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-calendarEmpty" />
					</svg>
					<div>#icon-calendarEmpty</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-calendarAlert" />
					</svg>
					<div>#icon-calendarAlert</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-calendarClock" />
					</svg>
					<div>#icon-calendarClock</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-calendarCheck" />
					</svg>
					<div>#icon-calendarCheck</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-calendarEx" />
					</svg>
					<div>#icon-calendarEx</div>
				</div>	

				<h3 class="heading-3 page-icon__list-heading">People</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-user" />
					</svg>
					<div>#icon-user</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-user-circle" />
					</svg>
					<div>#icon-user-circle</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons--horizontal" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-user-circle-down" />
					</svg>
					<div>#icon-user-circle-down</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons--horizontal" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-user-circle-up" />
					</svg>
					<div>#icon-user-circle-up</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-ghost" />
					</svg>
					<div>#icon-ghost</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-users" />
					</svg>
					<div>#icon-users</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Speech Bubbles</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-speechBubbles" />
					</svg>
					<div>#icon-speechBubbles</div>
				</div>				
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-videoChat" />
					</svg>
					<div>#icon-videoChat</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-goodChat" />
					</svg>
					<div>#icon-goodChat</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Eyes</h3>
		
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-eyeball" />
					</svg>
					<div>#icon-eyeball</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-eyeball-slash" />
					</svg>
					<div>#icon-eyeball-slash</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-eyeballAdd" />
					</svg>
					<div>#icon-eyeballAdd</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-eyeballMinus" />
					</svg>
					<div>#icon-eyeballMinus</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Hearts</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-heart" />
					</svg>
					<div>#icon-heart</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-checkHeart" />
					</svg>
					<div>#icon-checkHeart</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-plusHeart" />
					</svg>
					<div>#icon-plusHeart</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-heartOnSheet" />
					</svg>
					<div>#icon-heartOnSheet</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Signals</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-alert" />
					</svg>
					<div>#icon-alert</div>
				</div>			
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-alert-shield" />
					</svg>
					<div>#icon-alert-shield</div>
				</div>			
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-denied" />
					</svg>
					<div>#icon-denied</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Awards</h3>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-medal" />
					</svg>
					<div>#icon-medal</div>
				</div>		
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-trophy" />
					</svg>
					<div>#icon-trophy</div>
				</div>	
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-ribbon" />
					</svg>
					<div>#icon-ribbon</div>
				</div>	

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-badge" />
					</svg>
					<div>#icon-badge</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Reports</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-barGraph" />
					</svg>
					<div>#icon-barGraph</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-rankings" />
					</svg>
					<div>#icon-rankings</div>
				</div>		

				<h3 class="heading-3 page-icon__list-heading">Clipboards</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-clipboard" />
					</svg>
					<div>#icon-clipboard</div>
				</div>				
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-clipboardCheck" />
					</svg>
					<div>#icon-clipboardCheck</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-clipboardGrid" />
					</svg>
					<div>#icon-clipboardGrid</div>
				</div>	

				<h3 class="heading-3 page-icon__list-heading">Technology</h3>
		
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-eReader" />
					</svg>
					<div>#icon-eReader</div>
				</div>				
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-html" />
					</svg>
					<div>#icon-html</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-deviceVolume" />
					</svg>
					<div>#icon-deviceVolume</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Actions</h3>
		
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-upload" />
					</svg>
					<div>#icon-upload</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-download" />
					</svg>
					<div>#icon-download</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-save" />
					</svg>
					<div>#icon-save</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-clear" />
					</svg>
					<div>#icon-clear</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-print" />
					</svg>
					<div>#icon-print</div>
				</div>		
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-search" />
					</svg>
					<div>#icon-search</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-lookCloser" />
					</svg>
					<div>#icon-lookCloser</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-measuring" />
					</svg>
					<div>#icon-measuring</div>
				</div>			
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-mapPin" />
					</svg>
					<div>#icon-mapPin</div>
				</div>					
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-arrow-box" />
					</svg>
					<div>#icon-arrow-box</div>
				</div>	
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleWindow" />
					</svg>
					<div>#icon-doubleWindow</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-copy" />
					</svg>
					<div>#icon-copy</div>
				</div>			
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-play" />
					</svg>
					<div>#icon-play</div>
				</div>				
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-folderDownArrow" />
					</svg>
					<div>#icon-folderDownArrow</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-folder-open" />
					</svg>
					<div>#icon-folder-open</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-folder-closed" />
					</svg>
					<div>#icon-folder-closed</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Content Types</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-file" />
					</svg>
					<div>#icon-file</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-essay" />
					</svg>
					<div>#icon-essay</div>
				</div>												
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-form" />
					</svg>
					<div>#icon-form</div>
				</div>

				<h3 class="heading-3 page-icon__list-heading">Money and Fraud</h3>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-credit" />
					</svg>
					<div>#icon-credit</div>
				</div>						
							
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-credit-denied" />
					</svg>
					<div>#icon-credit-denied</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-credit-approved" />
					</svg>
					<div>#icon-credit-approved</div>
				</div>					
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-moneybag" />
					</svg>
					<div>#icon-moneybag</div>
				</div>				

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-mask" />
					</svg>
					<div>#icon-mask</div>
				</div>		
		
				<h3 class="heading-3 page-icon__list-heading">Dollar Signs</h3>
		
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-dollar-sign" />
					</svg>
					<div>#icon-dollar-sign</div>
				</div>		

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-payment-check" />
					</svg>
					<div>#icon-payment-check</div>
				</div>
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-payment-ellipses" />
					</svg>
					<div>#icon-payment-ellipses</div>
				</div>					
			
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-payment-clock" />
					</svg>
					<div>#icon-payment-clock</div>
				</div>				

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $SVG_PATH; ?>#icon-payment-alert" />
					</svg>
					<div>#icon-payment-alert</div>
				</div>	

			</div>

		</section>
		
		<section>
			<h2 class="heading-2">Open Iconic</h2>

			<p class="paragraph">Tiny icons from the open source collection from Iconic. Searchable directory of 223 marks found on <a class="link link_style-default" href="//useiconic.com/open">this page</a>. Best used at 8px, 16px, and 24px. Use the path <b>&lt;?php echo $ICONIC_PATH; ?&gt;#iconic-name</b>. This library uses the file <b>open-iconic-sprites.svg</b>.</p>

			<p class="paragraph">Examples below just for illustrative purposes. Full collection in the link above.</p>

<pre class="code-block code-snippet"><code class="html">&lt;svg class="icon icon_fill"&gt;&lt;use href="&lt;?php echo $ICONIC_PATH; ?&gt;#iconic-name"&gt;&lt;/use&gt;&lt;/svg&gt;
</code></pre>	

			<div class="page-icon__lists">
				
				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-dollar" />
					</svg>
					<div>#iconic-dollar</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-bolt" />
					</svg>
					<div>#iconic-bolt</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-brush" />
					</svg>
					<div>#iconic-brush</div>
				</div>	

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-compass" />
					</svg>
					<div>#iconic-compass</div>
				</div>	

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-beaker" />
					</svg>
					<div>#iconic-beaker</div>
				</div>

				<div class="page-icon__pairs">
					<svg class="icon icon_fill page-icon__icons" role="img" aria-label="">
						<use href="<?php echo $ICONIC_PATH; ?>#iconic-book" />
					</svg>
					<div>#iconic-book</div>
				</div>

			</div>

		</section>

	</main>

</div>

<?php include '../includes/footer.php'; ?>