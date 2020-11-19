function myFunction() {
  var x = document.getElementById("mi-menu");
  if (x.className === "el-menu") {
    x.className += " responsive";
  } else {
    x.className = "el-menu";
  }
}