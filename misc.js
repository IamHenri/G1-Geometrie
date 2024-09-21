/*!
 * masquer les réponses
 */

function myFunction() {
  var x = document.getElementById("exerciseHidden");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}