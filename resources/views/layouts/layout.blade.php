<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

</head>
<body>

	<div class="container-fluid" style="margin-top: 100px">

		@yield('content')
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;
			}
</style>
</body>

		<script>
		    $(document).ready(function(){
		      var date_input=$('input[name="fecha"]'); //our date input has the name "date"
		      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		      var options={
		        format: 'mm/dd/yyyy',
		        container: container,
		        todayHighlight: true,
		        autoclose: true,
		      };
		      date_input.datepicker(options);
		    })
		</script>
</html>