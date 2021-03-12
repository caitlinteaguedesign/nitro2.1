<?php 

// fetch sample data
$url = "https://jsonplaceholder.typicode.com/users/";
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
$result = json_decode($response);

include '../includes/header.php'; 

?>

<link rel="stylesheet" type="text/css" href="../nitro-css/build/pages/tables.min.css">

<div class="container" role="presentation">

	<?php include '../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		
		<h1 class="heading-1">Tables</h1>

		<p class="paragraph">Jump to section: <a class="link link_style-default" href="#styles">Default Styles</a>, <a class="link link_style-default" href="#theme-colors">Theme Table Colors</a>, <a class="link link_style-default" href="#table-colors">Pre-defined Table Color Schemes</a>, <a class="link link_style-default" href="#table-scrollable">Scrollable Tables</a>, <a class="link link_style-default" href="#text">Text Alignment</a>, <a class="link link_style-default" href="#column-widths">Column Widths</a>, and <a class="link link_style-default" href="#responsive">Responsive</a>.</p>

		<section id="styles">
			<h2 class="heading-2">Default Styles</h2>

			<div class="grid bottom-spacing-1">
				<div class="column_6">
					<p class="paragraph">Tables will have a very sparse appearance without any css. To create a basic table, use <b>.table</b> and <b>.table_theme-default</b> for a simple gray theme. The value assigned to <b>$default-text-color</b> is used for the <b>--emphasize</b> version of cells and rows.</p>
					<p class="paragraph">To dull the appearance of a cell or row (as in the case of representing the content as disabled or hidden), add <b>--dull</b> to rows or individual cells. To emphasize a row or cell, add <b>--emphasize</b>. In both cases you will use the standard version of the class (like <b>.table__cell</b>) <em>in addition</em> to the modifier class (<b>.table__cell--dull)</b>.</p>
				</div>

				<table class="column_6 table table_theme-default">
					<caption class="table__caption">Default</caption>
					<thead class="table__header">
						<tr>
							<th class="table__heading">Col Header</th>
							<th class="table__heading">Col Header</th>
						</tr>
					</thead>
					<tbody class="table__body">
						<tr class="table__row">
							<td class="table__cell">First row</td>
							<td class="table__cell"></td>
						</tr>
						<tr class="table__row table__row--dull">
							<td class="table__cell">.table__row--dull</td>
							<td class="table__cell"></td>
						</tr>
						<tr class="table__row">
							<td class="table__cell"></td>
							<td class="table__cell table__cell--dull">.table__cell--dull</td>
						</tr>
						<tr class="table__row table__row--emphasize">
							<td class="table__cell">.table__row--emphasize</td>
							<td class="table__cell"></td>
						</tr>							
						<tr class="table__row">
							<td class="table__cell"></td>
							<td class="table__cell table__cell--emphasize">.table__cell--emphasize</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">Last Row</td>
							<td class="table__cell"></td>
						</tr>																			
					</tbody>
				</table>	
			</div>

<pre class="code-block code-snippet"><code class="html">&lt;table class="table table_theme-default"&gt;	
	&lt;caption class="table__caption"&gt;Caption Text&lt;/caption&gt;
	&lt;thead class="table__header"&gt;
		&lt;tr&gt;
			&lt;th class="table__heading"&gt;Column Heading&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody class="table__body"&gt;
		&lt;tr class="table__row"&gt;
			&lt;td class="table__cell"&gt;Cell Text&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="table__row table__row--dull"&gt;
			&lt;td class="table__cell table__cell--dull"&gt;Cell Text&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="table__row table__row--emphasize"&gt;
			&lt;td class="table__cell table__cell--emphasize"&gt;Cell Text&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;		
&lt;/table&gt;
</code></pre>	
		</section>

		<section id="theme-colors">
			<h2 class="heading-2">Theme Table Colors</h2>
						
			<div class="grid bottom-spacing-1">
				<div class="column_6 grid">
					<p class="column_12">Setting the following values in the theme file can create a custom themed table on the fly. Additional colors are created based on a few variables fed into some sass color functons. These variables are:</p>

					<ul class="column_6 list list_style-circle">
						<li><b>$table-caption-bg</b></li>
						<li><b>$table-caption-color</b></li>
						<li><b>$table-header-bg</b></li>
						<li><b>$table-header-color</b></li>
						<li><b>$table-dull</b></li>
					</ul>
					<ul class="column_6 list list_style-circle">
						<li><b>$table-row-even</b></li>
						<li><b>$table-row-odd</b></li>
						<li><b>$table-heading-border</b></li>
						<li><b>$table-cell-border</b></li>
						<li><b>$table-emphasize</b></li>
					</ul>
				</div>

				<div class="column_6">

					<table class="table table_theme-generated bottom-spacing-1">
						<caption class="table__caption">Generated Theme</caption>
						<thead class="table__header">
							<tr>
								<th class="table__heading">Column Header</th>
								<th class="table__heading">Column Header</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table__row">
								<td class="table__cell">row 1 cell 1</td>
								<td class="table__cell">row 1 cell 2</td>
							</tr>	
							<tr class="table__row">
								<td class="table__cell">row 2 cell 1</td>
								<td class="table__cell">row 2 cell 2</td>
							</tr>										
						</tbody>
					</table>

<pre class="code-block code-snippet"><code class="html">&lt;table class="table table_theme-generated"&gt;	
	&lt;!-- content as usual --&gt;
&lt;/table&gt;
</code></pre>
				</div>

				<p class="column_12">The tables below features two style choices, <b>.table_theme-generated--lined</b> and <b>.table_theme-generated--alternate</b> for alternating row background colors. They can be used together or individually, and implementing at least one of them is recommended for usability. Dull and emphasis colors are not recommended on alternate background-color tables.</p>
				
				<table class="column_6 table table_theme-generated table_theme-generated--lined">
					<caption class="table__caption">Lined</caption>
					<thead class="table__header">
						<tr>
							<th class="table__heading">Column Header</th>
							<th class="table__heading">Column Header</th>
						</tr>
					</thead>
					<tbody>
						<tr class="table__row">
							<td class="table__cell">Regular row &amp; cell</td>
							<td class="table__cell"></td>
						</tr>		
						<tr class="table__row table__row--dull">
							<td class="table__cell">Dull row</td>
							<td class="table__cell"></td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell"></td>
							<td class="table__cell table__cell--dull">Dull cell</td>
						</tr>	
						<tr class="table__row table__row--emphasize">
							<td class="table__cell">Emphasize row</td>
							<td class="table__cell"></td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell"></td>
							<td class="table__cell table__cell--emphasize">Emphasize cell</td>
						</tr>										
					</tbody>
				</table>

				<table class="column_6 table table_theme-generated table_theme-generated--alternate">
					<caption class="table__caption">Alternate</caption>
					<thead class="table__header">
						<tr>
							<th class="table__heading">Column Header</th>
							<th class="table__heading">Column Header</th>
						</tr>
					</thead>
					<tbody>
						<tr class="table__row">
							<td class="table__cell">row 1 cell 1</td>
							<td class="table__cell">row 1 cell 2</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">row 2 cell 1</td>
							<td class="table__cell">row 2 cell 2</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">row 3 cell 1</td>
							<td class="table__cell">row 3 cell 2</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">row 4 cell 1</td>
							<td class="table__cell">row 4 cell 2</td>
						</tr>											
					</tbody>
				</table>
			</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;table class="table table_theme-generated table_theme-generated--lined table_theme-generated--alternate"&gt;	
	&lt;!-- both --&gt;
&lt;/table&gt;

&lt;table class="table table_theme-generated table_theme-generated--lined"&gt;
	&lt;!-- lined only --&gt;
&lt;/table&gt;

&lt;table class="table table_theme-generated table_theme-generated--alternate"&gt;	
	&lt;!-- alternate only --&gt;
&lt;/table&gt;
</code></pre>		
			
		</section>

		<section id="table-colors">
			<h2 class="heading-2">Pre-defined Table Color Schemes</h2>
			<p class="paragraph">Be sure to limit the number of different table color classes used in a project, and to use classes that work well with the projects' overall theme. All classes have an optional lined variant, like <b>.table_theme-mint--lined</b>.</p>

			<div class="grid">

				<?php
				$colors = array('rose','buttermilk','lime','mint','sky','aegean','periwinkle','taffy','garnet','gold','moss','pine','ocean','navy','eggplant','jam');

				foreach($colors as $c) {
				?>
				<table class="column_3 table table_theme-<?php echo $c; ?> table_theme-<?php echo $c; ?>--lined">
					<caption class="table__caption"><?php echo $c; ?></caption>
					<thead class="table__header">
						<tr>
							<th class="table__heading" colspan="2">.table_theme-<?php echo $c; ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="table__row">
							<td class="table__cell">Odd row</td>
							<td class="table__cell">-</td>
						</tr>
						<tr class="table__row">
							<td class="table__cell">Even row</td>
							<td class="table__cell">-</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">-</td>
							<td class="table__cell">-</td>
						</tr>	
						<tr class="table__row">
							<td class="table__cell">-</td>
							<td class="table__cell">-</td>
						</tr>			
					</tbody>
				</table>		
				<?php } // end foreach  ?>			
			</div>			
		</section>

		<section id="table-scrollable">
			<h2 class="heading-2">Scrollable Tables</h2>
			<p class="paragraph">Scrollable methods can be used normally by wrapping the entire table in a div with the scrollable classes (from either basic or advanced solutions). The downside is the the head of the table will be hidden as the user scrolls down; the solutions below are for when fixing the table head is desireable. Since these methods require splitting the head and body into two tables, they are unfortunately incompatible with tools like <b>tablesorter</b>.</p>
			
			<section>
				<h3 class="heading-3">Basic</h3>

				<div class="grid">
					<div class="column_6">
						<p class="paragraph">A simple version that requires some modifications to a traditional HTML table. This method utilizes the basic version of <b>scrollable</b> introduced in Nitro 1.0.</p>

						<p class="paragraph">To start, split the table into two. Both tables will require any theme classes on the <b>&lt;table&gt;</b> tag. Whatever column-width-# class is set on the th in the head portion should also be set on the first (at least) td in the corresponding body portion.</p>

						<p class="paragraph">Lastly, wrap the body table in a div with <b>.scrollable-#</b> like normal. Ta da! Now you have scrollable table with a fixed header.</p>

						<table class="table table_theme-generated table_theme-generated--lined">
							<thead class="table__header">
								<tr>
									<th class="table__heading table__column-width-3 text_align-center">ID</th>
									<th class="table__heading table__column-width-6">Name</th>
									<th class="table__heading">Username</th>
								</tr>
							</thead>
						</table>

						<div class="scrollable-200">
							<table class="table table_theme-generated table_theme-generated--lined">
								<tbody class="table__body">
									<?php 
									foreach ($result as $user) {
									?>
									<tr class="table__row">
										<td class="table__cell table__column-width-3 text_align-center"><?php echo $user->id; ?></td>
										<td class="table__cell table__column-width-6"><?php echo $user->name; ?></td>
										<td class="table__cell"><?php echo $user->username; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;table class="table"&gt;
	&lt;thead class="table__header"&gt;
		&lt;tr&gt;
			&lt;th class="table__heading table__column-width-3"&gt;
				ID
			&lt;/th&gt;
			&lt;th class="table__heading table__column-width-6"&gt;
				Name
			&lt;/th&gt;
			&lt;th class="table__heading"&gt;
				Username
			&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
&lt;/table&gt;

&lt;div class="scrollable-#"&gt;
	&lt;table class="table"&gt;
		&lt;tbody class="table__body"&gt;
			&lt;tr class="table__row"&gt;
				&lt;td class="table__cell table__column-width-3"&gt;
					123
				&lt;/td&gt;
				&lt;td class="table__cell table__column-width-6"&gt;
					Leanne R
				&lt;/td&gt;
				&lt;td class="table__cell"&gt;
					lennieg
				&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;
</code></pre>

				</div>
			</section>

			<section>
				<h3 class="heading-3">Advanced</h3>

				<div class="grid">
					<div class="column_6">
						
						<p class="paragraph">Toggles shadows depending on the position of the scroll bar. Requires additional markup and accompanying javascript. See <a href="https:/views/features/scrollable.php" class="link link_style-default">Scrollable</a> for more information.</p>

						<p class="paragraph">As with the basic version, begin by splitting the table into two, one for the table head and one for the table content. Column heads and their correspond table cells should have matching <b>.column-width-#</b> definitions.</p>

						<p class="paragraph">The structure around the body for scrollable will differ from the basic implementation. As with normal scrollable on tables, the class defining the max-height and overflow must be on a div wrapping the table (<b>.scrollable__container-#</b> or <b>.scrollable-###</b>). The table should have an additional class <b>.scrollable-content</b> for the the javascript to determine the height and width of the scrollable area.</p>

						<table class="table table_theme-generated table_theme-generated--lined">
							<thead class="table__header">
								<tr>
									<th class="table__heading table__column-width-3 text_align-center">ID</th>
									<th class="table__heading table__column-width-6">Name</th>
									<th class="table__heading">Username</th>
								</tr>
							</thead>
						</table>

						<div class="scrollable">
							<div class="scrollable__shadow scrollable__shadow-top"></div>
							<div class="scrollable__container-8">
								<table class="table table_theme-generated table_theme-generated--lined scrollable__content">
									<tbody class="table__body">
										<?php 
										foreach ($result as $user) {
										?>
										<tr class="table__row">
											<td class="table__cell table__column-width-3 text_align-center"><?php echo $user->id; ?></td>
											<td class="table__cell table__column-width-6"><?php echo $user->name; ?></td>
											<td class="table__cell"><?php echo $user->username; ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="scrollable__shadow scrollable__shadow-bottom"></div>
						</div>
					</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;div class="scrollable"&gt;
	&lt;div class="scrollable__shadow scrollable__shadow-top"&gt;&lt;/div&gt;
	&lt;div class="scrollable__container-8"&gt;
		&lt;table class="table scrollable__content"&gt;
			&lt;tbody class="table__body"&gt;
				&lt;tr class="table__row"&gt;
					&lt;td class="table__cell table__column-width-3"&gt;
						123
					&lt;/td&gt;
					&lt;td class="table__cell table__column-width-6"&gt;
						Leanne R
					&lt;/td&gt;
					&lt;td class="table__cell"&gt;
						lennieg
					&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/div&gt;
	&lt;div class="scrollable__shadow scrollable__shadow-bottom"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

				</div>
			</section>

			<section>
				<h3 class="heading-3">Trials &amp; Tribulations</h3>

				<div class="grid">

					<p class="column_6 paragraph">Tables with multiple columns with unspecified widths may not line up correctly (see example to the right). For best results define all but the last column width with <b>.table__column-width-#</b>.</p>

					<div class="column_6">
						<table class="table table_theme-generated table_theme-generated--lined">
							<thead class="table__header">
								<tr>
									<th class="table__heading table__column-width-3 text_align-center">ID</th>
									<th class="table__heading">Name</th>
									<th class="table__heading">Username</th>
								</tr>
							</thead>
						</table>

						<div class="scrollable-150">
							<table class="table table_theme-generated table_theme-generated--lined">
								<tbody class="table__body">
									<?php 
									foreach ($result as $user) {
									?>
									<tr class="table__row">
										<td class="table__cell table__column-width-3 text_align-center"><?php echo $user->id; ?></td>
										<td class="table__cell"><?php echo $user->name; ?></td>
										<td class="table__cell"><?php echo $user->username; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</section>

		</section>

		<section id="text">
			<h2 class="heading-2">Text Alignment</h2>

			<div class="grid">

				<div class="column_6">
					
					<p class="paragraph">All text in a table is aligned left by default. To modify, place classes <b>.text_align-center</b> and <b>.text_align-right</b> on the section you want to affect (i.e. the whole table, a row, a cell, etc.).</p>

					<p class="paragraph">To center an icon, use <b>.table__icon</b> on the <b>svg</b>.</p>

					<table class="table table_theme-ocean bottom-spacing-1">
						<caption class="table__caption">Text Alignment</caption>
						<thead class="table__header text_align-center">
							<tr>
								<th class="table__heading">.text_align-center</th>
								<th class="table__heading">Heading</th>
								<th class="table__heading">Heading</th>
								<th class="table__heading">
									<svg class="table__icon icon icon_fill" role="img" aria-label="icon description">
										<use href="<?php echo $SVG_PATH; ?>#icon-storeFront" />
									</svg>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table__row">
								<td class="table__cell text_align-right">.text_align-right</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">2435345</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">2435345</td>
							</tr>						
						</tbody>
					</table>

					<table class="table table_theme-ocean">
						<caption class="table__caption">Text Alignment</caption>
						<thead class="table__header text_align-right">
							<tr>
								<th class="table__heading">.text_align-right</th>
								<th class="table__heading">Heading</th>
								<th class="table__heading">Heading</th>
								<th class="table__heading">Heading</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table__row">
								<td class="table__cell text_align-center">.text_align-center</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">2435345</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">Data</td>
								<td class="table__cell">2435345</td>
							</tr>						
						</tbody>
					</table>
				</div>
<pre class="code-block column_6 code-snippet"><code class="html">&lt;!-- align all text center --&gt;
&lt;table class="text_align-center"&gt;
	&lt;!-- align column header text center --&gt;
	&lt;thead class="text_align-center"&gt;
		&lt;tr&gt;
			&lt;th&gt;Column Text&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;!-- align cell text right --&gt;
			&lt;td class="text_align-right"&gt;Cell text&lt;/td&gt;
		&lt;/tr&gt;				
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
			</div>
		</section>		

		<section id="column-widths">

			<h2 class="heading-2">Column Widths</h2>
			<p class="paragraph">To set explicit column widths, place <b>.table__column-width-#</b> on the first row of th's (or td's), where ## is 1 and 20. The number corresponds to the value of the typographic rhythm multipled by the corresponding value. If more precise values are required, chances are custom css is a better option. Leave at least one column with no width set for best responsive results./p>

			<div class="grid">

				<div class="column_6">
					<table class="table table_theme-default bottom-spacing-1">
						<caption class="table__caption">default</caption>
						<thead class="table__header">
							<tr>
								<th class="table__heading">heading</th>
								<th class="table__heading">heading</th>
								<th class="table__heading">heading</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table__row">
								<td class="table__cell">cell</td>
								<td class="table__cell">cell</td>
								<td class="table__cell">cell</td>
							</tr>					
						</tbody>
					</table>

					<table class="table table_theme-default">
						<caption class="table__caption">first and last column set</caption>
						<thead class="table__header">
							<tr>
								<th class="table__heading table__column-width-3">-3</th>
								<th class="table__heading">heading</th>
								<th class="table__heading table__column-width-6">-6</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table__row">
								<td class="table__cell">cell</td>
								<td class="table__cell">cell</td>
								<td class="table__cell">cell</td>
							</tr>					
						</tbody>
					</table>
				</div>

<pre class="code-block column_6 code-snippet"><code class="html">&lt;thead&gt;
	&lt;tr&gt;
		&lt;th class="table__column-width-1"&gt;
			heading
		&lt;/th&gt;
		&lt;th&gt;heading&lt;/th&gt;
		&lt;th&gt;heading&lt;/th&gt;
	&lt;/tr&gt;		
&lt;/thead&gt;
</code></pre>	
			</div>			
		</section>

		<section id="responsive">
			<h2 class="heading-2">Responsive Tables</h2>
			

			<div class="grid bottom-spacing-1">

				<div class="column_6">
					<p class="paragraph">To make a table responsive, the html in the table will need to be altered slightly. Then in Sass, you'll need to target the table by id or class and include the mixin <b>table--mobile()</b>. Because every table is unique, there's no way to create a custom "responsive" class that would work in all cases.</p>
					<p class="paragraph">The mixin <b>table--mobile()</b> can accept a parameters for label width. This value may vary depending on the length of the labels and ensures consistant text alignment for easy table reading.</p>
				</div>

<pre class="code-block column_6 code-snippet"><code class="sass">/* css with sass mixin */
#responsive-table-demo {
	@media screen and (max-width: 1500px) { 
		@include table--mobile(6rem);
	}
}	
</code></pre>

				<div class="column_6">
					<p class="paragraph">In each cell, wrap a label (should match the corresponding column header), in a div with class <b>.mobile-table__cell-label</b>. Labels are optional, like in the case of a group of buttons. Wrap the rest of the cell content in a div with class <b>.mobile-table__cell-content</b>. By default the content will be in column two, but this can be modified with custom css, as with the example below and the edit button (its container spans both columns).</p>

					<table class="table table_theme-sky table_theme-sky--lined bottom-spacing-1">
						<caption class="table__caption">Table with HTML Required for Responsive Mode</caption>
						<thead class="table__header">
							<tr>
								<th class="table__heading">ID #</th>
								<th class="table__heading">Name</th>
								<th class="table__heading">Place</th>
								<th class="table__heading"></th>
							</tr>
						</thead>
						<tbody class="table__body">
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>								
						</tbody>
					</table>

					<table id="responsive-table-demo" class="table table_theme-sky table_theme-sky--lined bottom-spacing-1">
						<caption class="table__caption">Responsive mode invoked</caption>
						<thead class="table__header">
							<tr>
								<th class="table__heading">ID #</th>
								<th class="table__heading">Name</th>
								<th class="table__heading">Place</th>
								<th class="table__heading"></th>
							</tr>
						</thead>
						<tbody class="table__body">
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content button-group">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content button-group">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>
							<tr class="table__row">
								<td class="table__cell">
									<div class="mobile-table__cell-label">ID #</div>
									<div class="mobile-table__cell-content">05486</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Name</div>
									<div class="mobile-table__cell-content">John S. Doe</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-label">Address</div>
									<div class="mobile-table__cell-content">406 Technology Dr W, Menomonie, WI</div>
								</td>
								<td class="table__cell">
									<div class="mobile-table__cell-content button-group">
										<button type="button" class="button button_color-default">Edit</button>
									</div>
								</td>
							</tr>								
						</tbody>
					</table>
				</div>
				
				<div class="column_6">
<pre class="code-block code-snippet"><code class="html">&lt;!-- html --&gt;
&lt;table id="responsive-table-demo" class="table table_theme-sky table_theme-sky--lined"&gt;
	&lt;thead class="table__header"&gt;
		&lt;!-- column headings --&gt;
	&lt;/thead&gt; 
	&lt;tbody class="table__body"&gt;
		&lt;tr class="table__row"&gt;
			&lt;td class="table__cell"&gt;
				&lt;div class="mobile-table__cell-label"&gt;ID #&lt;/div&gt;
				&lt;div class="mobile-table__cell-content"&gt;05486&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class="table__cell"&gt;
				&lt;div class="mobile-table__cell-label"&gt;Name&lt;/div&gt;
				&lt;div class="mobile-table__cell-content"&gt;
					John S. Doe
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class="table__cell"&gt;
				&lt;div class="mobile-table__cell-label"&gt;Address&lt;/div&gt;
				&lt;div class="mobile-table__cell-content"&gt;
					406 Technology Dr W, Menomonie, WI
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class="table__cell"&gt;
				&lt;div class="mobile-table__cell-content"&gt;
					&lt;!-- buttons --&gt;
				&lt;/div&gt;
			&lt;/td&gt;			
		&lt;/tr&gt;				
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>							
				</div>
			</div>	
		</section>					
	
	</main>

</div>

<?php include '../includes/footer.php'; ?>

