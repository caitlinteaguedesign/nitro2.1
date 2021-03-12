<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
	
	<title>Nitro 2.0: Leerburg Styles Toolkit</title>

	<!-- CSS -->
	<!-- main stylesheet built from sass -->
	<link rel="stylesheet" href="//leerburg.com/nitro2.0/nitro-css/build/global.min.css?v=8">

	<!-- jQuery-ui styles -->
	<link rel="stylesheet" href="//leerburg.com/nitro2.0/js/jquery-ui/jquery-ui.min.css">

	<!-- date/time picker styles -->
	<link rel="stylesheet" href="//leerburg.com/nitro2.0/js/jquery-datetimepicker/jquery.datetimepicker.min.css?v=01">

	<!-- JS -->
	<!-- jQuery Library -->
	<script src="//leerburg.com/nitro2.0/js/jquery-3.2.1.min.js"></script>

	<!-- jQuery UI -->
	<script src="//leerburg.com/nitro2.0/js/jquery-ui/jquery-ui.min.js"></script>

	<!-- form validation -->
	<script src="//leerburg.com/nitro2.0/js/parsley.min.js"></script>

	<!-- jQuery DateTimePicker -->
	<script src="//leerburg.com/nitro2.0/js/jquery-datetimepicker/jquery.datetimepicker.full.min.js?v=05"></script>

	<!-- jQuery Hover Intent -->
	<script type="text/javascript" src="//leerburg.com/nitro2.0/js/jquery.hoverIntent.minified.js"></script>

	<!-- for forcing IE to play nice and show external svgs linking -->
	<script type="text/javascript" src="//leerburg.com/nitro2.0/js/svg4everybody.min.js"></script>
	<script>svg4everybody();</script>

	<!-- Custom -->
	<script src="//leerburg.com/nitro2.0/js/custom.js?v=6"></script>	

	<!-- highlighting for code examples -->
	<link rel="stylesheet" href="//leerburg.com/nitro2.0/js/highlighter/sunburst.css">
	<script src="//leerburg.com/nitro2.0/js/highlighter/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	
	<?php
	// path for svgs (include before any files that use it)
	$SVG_PATH = "//leerburg.com/nitro2.0/img/core-icons.svg?v=06";
	$ICONIC_PATH = "//leerburg.com/nitro2.0/img/open-iconic-sprites.svg?v=01";

	// supermodals to rule them all
	include_once("/functions/epicmodals.php"); 
	?>


</head>

<body>
	<header>
		<div class="imageDemo"></div>
		<div class="title">Nitro 2.0: Marshland</div>
	</header>
