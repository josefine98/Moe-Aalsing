// The code in lines 3-20 makes the accordions work, and is from: https://www.w3schools.com/howto/howto_js_accordion.asp

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// Function to add a class to the h1 element of the "Cart", product overview, shop and "Checkout" pages, to be able to style it
if ((window.location.href.indexOf("cart") != -1) || (window.location.href.indexOf("checkout") != -1) || (window.location.href.indexOf("category") != -1) || (window.location.href.indexOf("shop") != -1)) { // Checks if the url contains the specific strings
  let element = document.querySelector('h1'); // Selects h1 element
  // Adds class:
  element.classList.add("shop-title");
}
