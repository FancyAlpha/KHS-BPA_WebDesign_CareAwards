<!Doctype html>
<html>
<?php
	$rel_url = "../";
	require($rel_url . "_modules/head.php"); ?>

	<body class="sub">
		<?php require($rel_url . "_modules/nav.php"); ?>

		<div class="bk special-recognition"></div>
		<main class="main-sub container">
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