<!-- NOTICE: always use <//?=$rel_url?> withought the // when linking!

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

<nav class="navbar">
  <div class="dropdown">
    <button class="award1ddbtn" onclick="dropdownFunction('award1Dropdown')"><?=$award1DropdownLabel?></button>
    <div class="dropdown-content" id="award1Dropdown">
      <?=$award1DropdownContents?>
    </div>
  </div>
  
  
  
  <div class="dropdown">
    <button class="award2ddbtn" onclick="dropdownFunction('award2Dropdown')"><?=$award2DropdownLabel?></button>
    <div class="dropdown-content" id="award2Dropdown">
      <?=$award2DropdownContents?>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="award3ddbtn" onclick="dropdownFunction('award3Dropdown')"><?=$award3DropdownLabel?></button>
    <div class="dropdown-content" id="award3Dropdown">
      <?=$award3DropdownContents?>
    </div>
  </div>
</nav>";
