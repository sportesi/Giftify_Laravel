window.onscroll = function() {
  var header = document.getElementsByTagName('header')[0];
  var body = document.getElementsByTagName('body');
  if (document.body.scrollTop > 180 ) {
    header.className = "sticky";
  }else{
    header.className = "";
  }
};
