window.onscroll = function() {
  var header = document.getElementsByTagName('header')[0];
  var body = document.getElementsByTagName('body');
  var main = document.getElementById('main');
  if (document.body.scrollTop > 180 ) {
    header.className = "sticky";
    main.className = "stickyMain";
  }else{
    header.className = "";
    main.className = "";
  }
};
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
