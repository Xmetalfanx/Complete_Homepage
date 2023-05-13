/* note to self: this has nothing to do with the sidebar menus, this is related to the top menu

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function navmenu() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
