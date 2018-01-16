<!DOCTYPE html>
<html>
<?php $rel_url = "";
	  $title = "BPA Care Awards";
	  $desc = "Business Professionals of America was created with many goals and ambitions. Amongst its most importants is serving the community. The BPA Cares program allows members, both as charters and/or individuals, to fulfill this goal and, at the same time, receive honors and recognition for doing such.";

	  include('_modules/head.php');
?>

<body class="home">
	<?php include('_modules/nav.php'); ?>
	<div class="bk"></div>
	<header>
		<div class="container heading">
			<h1>The Business Professionals of America: Cares Awards</h1>
			<p>Business Professionals of America was created with many goals and ambitions. Amongst its most important is serving the community. The BPA Cares program allows members, both as charters and/or individuals to fulfill this goal and, at the same time, receive honors and recognition for doing such.</p>
		</div>
	</header>

	<main class="container">
		<div class="row">
			<div class="column">
				<h2>
					<a href="Service-Learning-Awards/index.php">
						<?=$award1DropdownLabel?>
					</a>
				</h2>
				<p>Engaging with society through community service.</p>
				<?php
				foreach($award1DropdownContents as $link) {
					echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a><br>";
				}?>
			</div>

			<div class="column">
				<h2>
					<a href="Special-Recognition-Awards/index.php">
						<?=$award1DropdownLabel?>
					</a>
				</h2>
				<p>Supporting and Promoting BPA.</p>

				<?php
				foreach($award2DropdownContents as $link) {
					echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a><br>";
				}?>
			</div>

			<div class="column">
				<h2>
					<a href="Professional-Awards/index.php">
						<?=$award1DropdownLabel?>
					</a>
				</h2>
				<p>Recognizing BPA’s supporters.</p>

				<?php
				foreach($award3DropdownContents as $link) {
					echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a><br>";
				}?>
			</div>
		</div>
		<br>
		<p>Further explanation, such as guidelines, requirements, and recognitions can be found on each section’s webpage.</p>
		<br>
	</main>

	<?php require('_modules/footer.php'); ?>
</body>

</html>
