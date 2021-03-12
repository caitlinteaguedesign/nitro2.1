<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
		<h1 class="heading-1">Epicmodals</h1>

		<p class="paragraph">Modals is included with php, so find its file is located in <strong>includes/functions/</strong>. Content for modal examples located in <strong>includes/modals/</strong>. Script for calling epicmodals located at the bottom of this file.</p>

		<p class="paragraph">See Epicmodal file for more information on options.</p>

		<div class="bottom-spacing-1">
			<button type="button" class="button button_color-default" onclick="openDefault();">
				Default Template
				<span class="icon_inline">
					<svg class="icon icon_fill" role="img" aria-label="Open modal">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleWindow" />
					</svg>
				</span>
			</button>

			<button type="button" class="button button_color-theme" onclick="openNitro();">
				Nitro Template
				<span class="icon_inline">
					<svg class="icon icon_fill" role="img" aria-label="Open modal">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleWindow" />
					</svg>
				</span>
			</button>	

			<button type="button" class="button button_color-default" onclick="openClassic();">
				Classic Template
				<span class="icon_inline">
					<svg class="icon icon_fill" role="img" aria-label="Open modal">
						<use href="<?php echo $SVG_PATH; ?>#icon-doubleWindow" />
					</svg>
				</span>
			</button>	
		</div>

<pre class="code-block code-snippet"><code class="html">&lt;!-- Calls the default template --&gt;
&lt;button type="button" class="button button_color-default" onclick="openDefault();">
	Default Template
	&lt;!-- icon... --&gt;
&lt;/button>

&lt;!-- Add custom templates to _custom.scss or custom folder in scss/, and to template section in epicmodals.php --&gt;
&lt;button type="button" class="button button_color-theme" onclick="openNitro();">
	Nitro Template
	&lt;!-- icon... --&gt;
&lt;/button>	
</code></pre>	

<pre class="code-block code-snippet"><code class="js">// calls to epicmodals can include options, like fadeIn, timers, templates, max-width, and more
// can get and post data</span>
function</span> openDefault()</span>
{
	$.get</span>('../../includes/modals/default.php'</span>, function</span>(data</span>){
		supermodal.fadeIn</span>({content: data</span>});
	});
}

function</span> openNitro()</span>
{
	$.get</span>('../../includes/modals/nitro.php'</span>, function</span>(data</span>){
		supermodal.fadeIn</span>({content: data</span>, template: 'nitro'</span>});
	});
}
</code></pre>	

		</section>

	</main>

</div>

<script>
function openDefault(){

	$.get('../../includes/modals/default.php', function(data){
		supermodal.fadeIn({content: data});
	});
}

function openNitro(){

	$.get('../../includes/modals/nitro.php', function(data){
		supermodal.fadeIn({content: data, template: 'nitro'});
	});
}

function openClassic(){

	$.get('../../includes/modals/default.php', function(data){
		supermodal.fadeIn({content: data, template: 'classic'});
	});
}
</script>

<?php include '../../includes/footer.php'; ?>		