function AbrirNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementsByTagName("main").style.marginLeft = "250px";
}

function FecharNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementsByTagName("main").style.marginLeft = "0";
}
