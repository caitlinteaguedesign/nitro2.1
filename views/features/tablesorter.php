<?php

// fetch sample data
$url = "https://jsonplaceholder.typicode.com/users/";
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
$result = json_decode($response);

?>

<?php include '../../includes/header.php'; ?>

<div class="container" role="presentation">

	<?php include '../../includes/sidebar.php'; ?>
	
	<main class="main global-padding">
      <h1 class="heading-1">Tablesorter</h1>
      <p class="paragraph">Finally brought to Nitro by popular demand! Requires 3rd party library, <b>tablesorter.js</b>. May not be compatible with older versions of tablesorter. Read 
         <a href="https://mottie.github.io/tablesorter/docs/" target="_blank" class="link link_style-default">
            Tablersorter Documentation
            <span class="icon_inline">
               <svg class="icon icon_fill" role="img" aria-label="open in a new window">
                  <use href="<?php echo $SVG_PATH; ?>#icon-arrow-box" />
               </svg>
            </span>
         </a> 
      for details on implementation and features.
      </p>

      <p class="paragraph">A simple version is implemented below. To toggle icons and set specific columns to unsortable requires additional script.</p>

      <table class="table-sortable table table_theme-generated table_theme-generated--lined bottom-spacing-2">
         <thead class="table__header">
            <tr>
               <th class="table__heading table__column-width-4 text_align-center" title="Press to toggle sort by ID">
                  ID
                  <span class="icon_inline">
                     <svg class="icon icon_fill table-sortable__icon" role="img" aria-label="Sort column" width="16" height="16">
                        <use href="<?php echo $SVG_PATH; ?>#icon-sort-unsorted" />
                     </svg>
                  </span>
               </th>
               <th class="table__heading" title="Press to toggle sort by Name">
                  <span class="icon_inline">
                     <svg class="icon icon_fill table-sortable__icon" role="img" aria-label="Sort column" width="16" height="16">
                        <use href="<?php echo $SVG_PATH; ?>#icon-sort-unsorted" />
                     </svg>
                  </span>
                  Name
               </th>
               <th class="table__heading text_align-right" title="Press to toggle sort by Username">
                  Username
                  <span class="icon_inline">
                     <svg class="icon icon_fill table-sortable__icon" role="img" aria-label="Sort column" width="16" height="16">
                        <use href="<?php echo $SVG_PATH; ?>#icon-sort-unsorted" />
                     </svg>
                  </span>   
               </th>
               <th class="table__heading table-sortable__sorter-false">Email (not sortable)</th>
            </tr>
         </thead>
         <tbody class="table__body">
            <?php 
            foreach ($result as $user) {
            ?>
            <tr class="table__row">
               <td class="table__cell text_align-center"><?php echo $user->id; ?></td>
               <td class="table__cell"><?php echo $user->name; ?></td>
               <td class="table__cell text_align-right"><?php echo $user->username; ?></td>
               <td class="table__cell"><?php echo $user->email; ?></td>
            </tr>
            <?php } ?>
         </tbody>
      </table>

      <p class="paragraph">Add class <b>.table-sortable</b> to the table, or target with custom class or id and apply javscsript manually. Follow the example below for the <b>.table-sortable__icon</b>, and add <b>.table-sortable__sorter-false</b> to columns that should not have sorting (if desired). Add a title arttibue to the th for additional labeling for mouse users.</p>

<pre class="code-block code-snippet"><code class="html">&lt;table class="table-sortable table"&gt;
   &lt;thead class="table__header"&gt;
      &lt;tr&gt;
         &lt;!-- each column with sortable --&gt;
         &lt;th class="table__heading" title="Press to toggle sort by ID"&gt;
            ID
            &lt;span class="icon_inline"&gt;
               &lt;svg class="icon icon_fill table-sortable__icon" width="16" height="16"
                  role="img" 
                  aria-label="Sort column"&gt;
                  &lt;use href="&lt;?php echo $SVG_PATH; ?&gt;#icon-sort-unsorted" /&gt;
               &lt;/svg&gt;
            &lt;/span&gt;
         &lt;/th&gt;
         &lt;!-- each column not sortable --&gt;
         &lt;th class="table__heading table-sortable__sorter-false"&gt;
            Email (not sortable)
         &lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;!-- rest of table --&gt;
&lt;/table&gt;
</code></pre>	

<p class="paragraph">The code snippet below can be used globally. Use the variable to modify individual table's features as necessary. Relies on classes provided by the library (<b>.tablesorter-headerUnSorted</b>, <b>.tablesorter-headerAsc</b>, and <b>.tablesorter-headerDesc</b>).</p>

<pre class="code-block code-snippet"><code class="js">$(document).ready(function() { 
   var $table_sortable_basic = $(".table-sortable").tablesorter({
      headers: {
         '.table-sortable__sorter-false' : {
            sorter: false
         }
      }
   }).bind('sortEnd', function(e, table) {
      $(".tablesorter-headerUnSorted .table-sortable__icon")
         .find("use")
         .attr("href", "&lt;?php echo $SVG_PATH; ?&gt;#icon-sort-unsorted");

      $(".tablesorter-headerAsc .table-sortable__icon")
         .find("use")
         .attr("href", "&lt;?php echo $SVG_PATH; ?&gt;#icon-sort-up");
      $(".tablesorter-headerDesc .table-sortable__icon")
         .find("use")
         .attr("href", "&lt;?php echo $SVG_PATH; ?&gt;#icon-sort-down");
   });
});
</code></pre>
   </main>

</div>


<script>
   // basic table sorting setup; use var to modify individual table settings
	$(document).ready(function() { 
		var $table_sortable_basic = $(".table-sortable").tablesorter({
			headers: {
				'.table-sortable__sorter-false' : {
					sorter: false
				}
			}
		}).bind('sortEnd', function(e, table) {
			$(".tablesorter-headerUnSorted .table-sortable__icon").find("use").attr("href", "<?php echo $SVG_PATH; ?>#icon-sort-unsorted");
			$(".tablesorter-headerAsc .table-sortable__icon").find("use").attr("href", "<?php echo $SVG_PATH; ?>#icon-sort-up");
			$(".tablesorter-headerDesc .table-sortable__icon").find("use").attr("href", "<?php echo $SVG_PATH; ?>#icon-sort-down");
		});
   });
   
   // example data fetch
   // fetch('https://jsonplaceholder.typicode.com/users')
   // .then((response) => response.json())
   // .then((json) => console.log(json));
</script>
<script src="../../js/jquery.tablesorter.min.js"></script> 

<?php include '../../includes/footer.php'; ?>