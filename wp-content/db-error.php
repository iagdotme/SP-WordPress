<?php
header( 'HTTP/1.1 503 Service Temporarily Unavailable' );
header( 'Status: 503 Service Temporarily Unavailable' );
header( 'Retry-After: 3600' ); // 60 minutes
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
	<title>Sorry, there was a problem</title>
	<meta charset="utf-8" />
	<style>
	body {
		background: #fff;
		font: 16px Georgia, serif;
		line-height: 1.3;
		margin: 0;
		padding: 0;
	}

	#content {
		background: #fff url(/assets/img/maintenance/hole.jpg) no-repeat left top;
		height: 225px;
		margin: 80px auto 0;
		padding: 75px 50px 0 400px;
		width: 375px;
	}

	h1 {
		font-size: 34px;
		font-weight: normal;
		margin-top: 0;
	}

	p {
		margin: 0 0 10px 5px;
	}
	</style>
</head>
<body>

<div id="content">
	<h1>Whoops!</h1>
	<p>Something went wrong, and we're trying to figure out what. Check back soon!</p>
</div><!-- #content -->

</body>
</html>
<?php die(); ?>