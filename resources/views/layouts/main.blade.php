<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	</head>
	<body>
	
		@yield('content')

		<script src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			   //PAra probar
			});
		</script>
	</body>
</html>