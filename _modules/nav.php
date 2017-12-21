<nav>
	<a href="<?=$rel_url?>index.php">home!</a>
	<a href="<?=$rel_url?>Professional-Awards/testing.php">to testing 1!</a>
	<a href="<?=$rel_url?>Service-Learning-Awards/testing2.php">to testing 2!</a>
	<a href="<?=$rel_url?>Special-Recognition-Awards/testing3.php">to testing 3!</a>
</nav>

<!-- nav Setcion -->
<?php
$award1DropdownLabel = "Professional Awards";
$award2DropdownLabel = "Service Learning Awards";
$award3DropdownLabel = "Special Recognition Awards";

$award1DropdownContents = "
<a href=\"#\">Link 1</a>
<a href=\"#\">Link 2</a>
<a href=\"#\">Link 3</a>";

$award2DropdownContents = "
<a href=\"#\">Link 1</a>
<a href=\"#\">Link 2</a>
<a href=\"#\">Link 3</a>";

$award3DropdownContents = "
<a href=\"#\">Link 1</a>
<a href=\"#\">Link 2</a>
<a href=\"#\">Link 3</a>";

?>

<div class="navbar">
  <div class="dropdown">
    <button class="award1ddbtn" onclick="dropdownFunction('award1Dropdown')"><?=$award1DropdownLabel?></button>
    <div class="dropdown-content" id="award1Dropdown">
      <?=$award1DropdownContents?>
    </div>
  </div>
  
  
  
  <div class="dropdown">
    <button class="award2ddbtn" onclick="dropdownFunction('award2Dropdown')"><?=$award2DropdownLabel?></button>
    <div class=\"dropdown-content\" id="award2Dropdown">
      <?=$award2DropdownContents?>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="award3ddbtn" onclick="dropdownFunction('award3Dropdown')"><?=$award3DropdownLabel?></button>
    <div class="dropdown-content" id="award3Dropdown">
      <?=$award3DropdownContents?>
    </div>
  </div>
</div>";
