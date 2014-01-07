<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="{$base_href}"/>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Shorty Framework</title>

		<link href="/css/bootstrap.css" rel="stylesheet">

		<link href="starter-template.css" rel="stylesheet">
		<style>
			html,
			body {
				height: 100%;
				/* The html and body elements cannot have any padding or margin. */
			}

			/* Wrapper for page content to push down footer */
			#wrap {
				min-height: 100%;
				height: auto;
				/* Negative indent footer by its height */
				margin: 0 auto -60px;
				/* Pad bottom by footer height */
				padding: 0 0 60px;
			}

			#content{
				padding-top:60px;
			}

			/* Set the fixed height of the footer here */
			#footer {
				height: 60px;
				background-color: #f5f5f5;
			}

		</style>
	</head>

	<body>
		<div id="wrap">
			{$navigation}

			<div class="container">

				<div id="content">
					<h1>{$title}</h1>
					{$content}
				</div>

			</div>
		</div>
		{$footer}

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
