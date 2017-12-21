/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropdownFunction(itemID) {
    document.getElementById(itemID).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.award1ddbtn')) {
    var award1Dropdown = document.getElementById("award1Dropdown");
      if (award1Dropdown.classList.contains('show')) {
        award1Dropdown.classList.remove('show');
      }
  }

  if (!e.target.matches('.award2ddbtn')) {
    var award2Dropdown = document.getElementById("award2Dropdown");
      if (award2Dropdown.classList.contains('show')) {
        award2Dropdown.classList.remove('show');
      }
  }

  if (!e.target.matches('.award3ddbtn')) {
    var award3Dropdown = document.getElementById("award3Dropdown");
      if (award3Dropdown.classList.contains('show')) {
        award3Dropdown.classList.remove('show');
      }
  }
}
