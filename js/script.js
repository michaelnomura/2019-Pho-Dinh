(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
    title: "Menu",
    breakpoint: 768,
    format: "multitoggle"
});

$("#cssmenu").prepend("<div id='menu-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

$("#cssmenu > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#cssmenu > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menuLine.css("width", lineWidth);
menuLine.css("left", linePosition);

$("#cssmenu > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menuLine.css("width", lineWidth);
  menuLine.css("left", linePosition);
}, function() {
  menuLine.css("left", defaultPosition);
  menuLine.css("width", defaultWidth);
});

    $('.full-bg-img').css({
        height: $(window).innerHeight()
    });
    $(window).resize(function(){ // add resize() to adjust to browser
        $('.full-bg-img').css({
            height: $(window).innerHeight()
        });
    });
    
    $('.full-height').css({
        height: $(window).innerHeight()
    });
    $(window).resize(function(){ // add resize() to adjust to browser
        $('.full-height').css({
            height: $(window).innerHeight()
        });
    });
    
});
})(jQuery);
