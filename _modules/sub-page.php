<!Doctype html>
<html>
<?php
	$rel_url = "../";
	require($rel_url . "_modules/head.php"); ?>

	<body class="sub">
		<?php require($rel_url . "_modules/nav.php"); ?>

		<main class="sub-body container">
			<header>
				<h1>
					<?=$heading?>
				</h1>
			</header>

			<main>
				<?=nl2br($para)?>
			</main>
		</main>

		<?php require($rel_url . "_modules/footer.php"); ?>
	</body>

</html>
