window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("landing-cover").style.background = "rgba(0,0,0,0.5)";
    document.getElementById("navbar").style.background = "rgba(89, 136, 201,1)";
  } 
  else {
    document.getElementById("landing-cover").style.background = "rgba(0,0,0,0)";
    document.getElementById("navbar").style.background = "rgba(134, 169, 217,0)";
  }
}