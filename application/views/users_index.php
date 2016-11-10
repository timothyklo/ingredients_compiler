<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Jquery Theme -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/hot-sneaks/jquery-ui.css">
	<!-- Materialize CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<!-- Personal CSS -->
	<link rel="stylesheet" href="assets/style.css">


	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>


	<!-- Jquery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Materialize JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script>
		$(document).ready(function(){
			$('a').click(function(){
				var numRecipes = $('#numRecipes').val();
				for (var i = numRecipes; i > 0; i--) {
					$('#siteEntry').prepend('<div class="input-field">\n' + 
												'<input type="text" name="recipe[]" id="test">\n' + 
												'<label for="test">Recipe #' + i + '</label>\n' +
												'</div>');
				}
			})
		})
	</script>
</head>
<body>
<div class="container">
<h4> How many recipes do you have? </h4>
<div class="input-field">
	<input type="text" name="numRecipes" id="numRecipes">
	<label for="numRecipes">How many recipes do you have?</label>
</div>
<a class="btn waves-effect waves-light center-align">Submit</a>
<form id="siteEntry" action="/crawl" method="post">

<button class="btn waves-effect waves-light center-align" type="submit">Crawl It</button>
</form>
</div>
</body>
</html>