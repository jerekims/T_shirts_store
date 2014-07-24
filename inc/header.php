<html>
<head>
	<title><?php echo" $pagetitle"?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php  if ($sec=="shirt") {//check and underline the shirts page
					echo "on";
				}?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php  if ($sect=="contact") {//checks and underlines the contact page
					echo "on";
				}?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a href="#">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">