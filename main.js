var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
function opentab(tabname) {
  for (tablink of tablinks) {
    tablink.classList.remove("active-link");
  }
  for (tabcontent of tabcontents) {
    tabcontent.classList.remove("active-tab");
  }
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tab");
}

var sidemeu = document.getElementById("sidemenu");

let hamburgerMenu = document.getElementById("hamburgerMenu");

hamburgerMenu.addEventListener("click", function () {
  console.log("d");
  sidemeu.style.right = "0px";
});
function openmenu() {
  console.log("resd");
}
function closemenu() {
  sidemeu.style.right = "-200px";
}
