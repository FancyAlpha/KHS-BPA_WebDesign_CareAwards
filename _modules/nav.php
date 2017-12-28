<!-- NOTICE: always use <//?=$rel_url?> withought the // when linking!

<!-- nav Setcion -->
<?php
$award1DropdownLabel = "Professional Awards";
$award2DropdownLabel = "Service Learning Awards";
$award3DropdownLabel = "Special Recognition Awards";

//2d array magic
$award1DropdownContents  = array(array("Link 1", "#"),
								array("Link 2", "#"),
								array("Link 3", "#"),
								array("Link 4", "#"),
								array("Link 5", "#"));

$award2DropdownContents  = array(array("Link 1", "#"),
							   array("Link 2", "#"),
							   array("Link 3", "#"));

$award3DropdownContents = array(array("Link 1", "#"),
							   array("Link 2", "#"),
							   array("Link 3", "#"),
							   array("Link 4", "#"));

?>

<nav class="navbar">
	<div class="container">
		<img src="<?=$rel_url?>_assets/headerLogo.png" alt="BPA Logo with tagline">
		<div>
			<div class="dropdown">
				<div class="aBtn award1ddbtn">
					<?=$award1DropdownLabel?>
				</div>
				<div class="dropdown-content">
					<?php 
					foreach($award1DropdownContents as $link)
						echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
					?>
				</div>
			</div>



			<div class="dropdown">
				<div class="aBtn award2ddbtn">
					<?=$award2DropdownLabel?>
				</div>
				<div class="dropdown-content">
					<?php 
					foreach($award2DropdownContents as $link)
						echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
					?>
				</div>
			</div>

			<div class="dropdown">
				<div class="aBtn award3ddbtn">
					<?=$award3DropdownLabel?>
				</div>
				<div class="dropdown-content">
					<?php 
					foreach($award3DropdownContents as $link)
						echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
					?>
				</div>
			</div>
		</div>
	</div>
</nav>
