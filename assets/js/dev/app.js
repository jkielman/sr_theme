
//Slideshow

var imgCount = $("#content img").length

console.log(imgCount);
var slideContainer = $("#slideshow").get(0);

for (var i = 0; i < imgCount; i++) {

slideContainer.innerHTML += '<div class="slide"></div>';

$(".slide").get(i).style.backgroundImage = 'url('+$("img").get(i).getAttribute("src")+')';

}

$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 6000);


//$(".page-id-20 .bottom-content ul li ").hide(0).delay(500).fadeIn(3000)






//Sparatic Header Text

 //var headerRepeat = $('h1.entry-title');

  //  for (var i = 0; i < 3; i++) {
  //  var a = Math.max(0, Math.min(100, Math.ceil(Math.random() * 100)));
  //  var b = Math.max(0, Math.min(100, Math.ceil(Math.random() * 100)));
  //   headerRepeat.clone().insertAfter("header").addClass("text").css({
  //      top: a + '%',
  //      left: b + '%',
  //  });

  //  }





