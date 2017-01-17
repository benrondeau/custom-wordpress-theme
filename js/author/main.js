/* Script to toggle the hover text for homepage images */
$(document).on('ready', function(){
    var imageBox = $(".homepage-image-boxes");
    imageBox.mouseenter(function(){
        var thisThing = $(this);
        thisThing.find('img').hide();
        thisThing.find('.homepage-image-rollover-box').show();
    });
    imageBox.mouseleave(function(){
        var thatThing = $(this);
        thatThing.find('.homepage-image-rollover-box').hide();
        thatThing.find('img').show();
    });
});
