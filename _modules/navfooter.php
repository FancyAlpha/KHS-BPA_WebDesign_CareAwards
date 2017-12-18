<head>
    <link rel="stylesheet" type="text/css" href="/_styles/css/navfooter.css">
    <script src="/_js/navfooter.js"></script>
</head>

<body>

<?php

//Header Setcion

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



$navbarContents = "
<div class=\"navbar\">
  <div class=\"dropdown\">
    <button class=\"award1ddbtn\" onclick=\"dropdownFunction('award1Dropdown')\">$award1DropdownLabel</button>
    <div class=\"dropdown-content\" id=\"award1Dropdown\">
      $award1DropdownContents
    </div>
  </div>
  
  
  
  <div class=\"dropdown\">
    <button class=\"award2ddbtn\" onclick=\"dropdownFunction('award2Dropdown')\">$award2DropdownLabel</button>
    <div class=\"dropdown-content\" id=\"award2Dropdown\">
      $award2DropdownContents
    </div>
  </div>
  
  <div class=\"dropdown\">
    <button class=\"award3ddbtn\" onclick=\"dropdownFunction('award3Dropdown')\">$award3DropdownLabel</button>
    <div class=\"dropdown-content\" id=\"award3Dropdown\">
      $award3DropdownContents
    </div>
  </div>
</div>";



//Footer Setcion

$footerColumn1 = "
L1<br>
L2<br>
L3<br>";

$footerColumn2 = "
L4<br>
L5<br>
L6<br>";

$footerColumn3 = "
L7<br>
L8<br>
L9<br>";



$footerContents = "
<footer>
<div class=\"footer-item\">
$footerColumn1
</div>
<div class=\"footer-item\">
$footerColumn2
</div>
<div class=\"footer-item\">
$footerColumn3
</div>
</footer>";
?>

</body>
