$(document).ready(function(){
  $("#container").fadeIn(300);
  $("#nico").delay(300).fadeIn(300).animate({
    bottom:'-40', left:'27%'
  }, 5000, 'linear').fadeOut(300);
  
  $("#roman").delay(5800).fadeIn(300).animate({
    bottom:'-30', left:'57%'
    }, 5000, 'linear').fadeOut(300);
  
  $("#dmitriy").delay(11400).fadeIn(300).animate({
    bottom:'-80', left:'43%'
    }, 5000, 'linear').fadeOut(300);  
  $("#container").delay(170000).fadeOut(300);
  });