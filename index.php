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
			<div class="column service">
				<h2>
					<?=$award1DropdownLabel?>
				</h2>
				<p>Engaging with society through community service.<br>
					<a href="Service-Learning-Awards/index.php">Learn more</a>.
				</p>
			</div>

			<div class="column special">
				<h2>
					<?=$award2DropdownLabel?>
				</h2>
				<p>Supporting and Promoting BPA.<br>
					<a href="Special-Recognition-Awards/index.php">Learn more</a>.
				</p>
			</div>

			<div class="column proff">
				<h2>
					<?=$award3DropdownLabel?>
				</h2>
				<p>Recognizing BPA’s supporters.<br>
					<a href="Professional-Awards/index.php">Learn more</a>.
				</p>
			</div>
		</div>
		<br>
		<p>Further explanation, such as guidelines, requirements, and recognitions can be found on each section’s webpage.</p>
		<br>
	</main>

	<?php require('_modules/footer.php'); ?>
</body>

</html>
