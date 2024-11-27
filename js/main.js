/* Set the width of the sidebar to 250px (show it) */
function sidepane() {
  document.getElementById("mySidepanel").style.width = "100%";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0px";
}

document.getElementsByClassName("card").addEventListener("click", function () {
  window.location.href = "https://facebook.com"; // URL to redirect to
});