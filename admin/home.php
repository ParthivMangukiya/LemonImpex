<?php

//index.php

session_start();
require '../vendor/autoload.php';
?>
<?php
   if(!isset($_SESSION["name"]))
   {
    header('Location: index.php');
   }
?>
<?php
if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
	$header_values = $data = [];
	foreach ( $xlsx->rows() as $k => $r ) {
		if ( $k === 0 ) {
			$header_values = $r;
			continue;
		}
		$data[] = array_combine( $header_values, $r );
	}
}  else {
	echo SimpleXLSX::parseError();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LemonImpex - Dashboard</title>

	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap3.min.js"></script>
	<link href="../css/bootstrap3.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/footable.bootstrap.min.css" rel="stylesheet">
	<script src="../js/moment.min.js"></script>
	<script src="../js/footable.min.js"></script>
	<script>
		jQuery(function($){
			$('.table').footable({
				"columns": [
					{"name":"Stock #","type":"number","title":"#"},
					{"name":"Weight","type":"number","title":"Weight"},
					{"name":"Shape","type":"text","title":"Shape"},
					{"name":"Fancy Color Intensity","type":"text","title":"Intensity"},
					{"name":"Fancy Color Overtone","type":"text","title":"Overtone","breakpoints":"xs sm"},
					{"name":"Fancy Color","type":"text","title":"Fancy Color"},
					{"name":"Clarity","type":"text","title":"Clarity"},
					{"name":"Fluorescence Intensity","text":"number","title":"FI","breakpoints":"xs sm"},
					{"name":"Fluorescence Color","type":"text","title":"FC","breakpoints":"xs sm"},
					{"name":"Polish","type":"text","title":"Polish","breakpoints":"xs sm"},
					{"name":"Symmetry","type":"text","title":"Symmetry","breakpoints":"xs sm"},
					{"name":"Depth %","type":"number","title":"Depth","breakpoints":"xs sm"},
					{"name":"Table %","type":"number","title":"Table","breakpoints":"xs sm"},
					{"name":"Measurements","type":"text","title":"XYZ","breakpoints":"xs sm",},
					{"name":"Certificate #","type":"number","title":"Certi","breakpoints":"xs sm"},
					{"name":"RapNet Price","type":"number","title":"Price","breakpoints":"xs sm"},
					{"name":"Country","type":"text","title":"Country","breakpoints":"xs sm"},
					{"name":"Rapnet  Discount %","type":"text","title":"%","breakpoints":"xs sm","filterable":false},
					{"name":"Color","type":"text","title":"Color","breakpoints":"xs sm"},
					{"name":"Diamond Image","type":"text","title":"Image","breakpoints":"xs sm","filterable":false}
				],
				"rows": <?=json_encode($data)?>
			});
		});
		$( document ).ready(function() {
			$(".intensity").on('change', function(){
			var filtering = FooTable.get('#datatable').use(FooTable.Filtering), // get the filtering component for the table
				filter = $(this).val(); // get the value to filter by
			if (filter === 'none'){ // if the value is "none" remove the filter
				filtering.removeFilter('intensity');
			} else if(filter === 'fancy'){ // otherwise add/update the filter.
				filtering.addFilter('intensity', '"fancy" -intense -dark -vivid -deep -light', ['Fancy Color Intensity']);
			} else {
				filtering.addFilter('intensity', filter, ['Fancy Color Intensity']);
			}
			filtering.filter();
		});	
		});
		
	</script>	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<div class="well">
	<form class="form-inline">
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_none" value="none" checked>
			None
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_fancy" value="fancy">
			Fancy
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_intense" value="intense">
			Intense
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_vivid" value="vivid">
			Vivid
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_dark" value="dark">
			Dark
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_light" value="light">
			Light
		</label>
		<label class="radio-inline">
			<input type="radio" class="intensity" name="intensity" id="intensity_deep" value="deep">
			Deep
		</label>
	</form>
</div>
<table id="datatable" class="table" data-sorting="true" data-filtering="true" data-filter-position="right"> </table>
</body>
</html>