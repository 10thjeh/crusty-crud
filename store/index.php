<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
	<head>
		<meta charset='utf-8'>
		<title>Crusty Crud</title>
		<!-- BS CSS --> <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>
	</head>
	<body>
		<nav class='navbar navbar-light bg-light'>
			<div class='container-fluid'>
				<span class='navbar-brand mb-0 h1'><?php echo (isset($_SESSION['user']))?"Welcome {$_SESSION['user']}!":"Welcome guest" ?></span>
				<?php
						echo (isset($_SESSION['user']))?
						"<form class='form-inline' method='post' action='controller/logout.php'><button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Log Out</button></form>"
						:"<form class='form-inline' method='post' action='login.php'><button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Log In</button></form>";
				?>
			</div>
		</nav>
		<!-- BS JavaScript --><script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js' integrity='sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0' crossorigin='anonymous'></script>
	</body>
</html>
