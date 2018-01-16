<!Doctype html>
<html>
<?php
	$rel_url = "../";
	require($rel_url . "_modules/head.php"); ?>

	<body>
		<?php require($rel_url . "_modules/nav.php"); ?>

		<header>
			<h1>?=$heading</h1>
		</header>

		<main class="container">
			<?=$para?>
		</main>

		<?php require("../_modules/footer.php"); ?>
	</body>

</html>
