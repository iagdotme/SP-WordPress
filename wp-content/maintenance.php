<?php if($_SERVER['REMOTE_ADDR'] !== "83.223.100.156") {
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' ); // 10 minutes
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
	<title>Sorry, We're Getting Tuned Up</title>
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
		background: #fff url(/assets/img/maintenance/toolbox.jpg) no-repeat left top;
		height: 305px;
		margin: 80px auto 0;
		padding: 50px 50px 0 425px;
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
	<h1>We needed a tune-up.</h1>
	<p>We're doing a bit of site maintenance that should only last a few minutes.</p>
	<p>Go grab a cup of coffee, and we should be back by the time you are!</p>
</div><!-- #content -->

</body>
</html>
<?php die(); } else {die();}