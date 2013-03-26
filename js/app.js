;
$(window).on('load', function(){
    //Apply any slide show overlays, if applicable
    $('.slideshowOverlay').each(function(){
        //Get the slideshow that this overlay is for
        var targetSlideshow = $(this).data("slideshow-id");
        var ss = $('#' + targetSlideshow);
        //Copy it's css and overlay this div on top of it
        var overlayCSS = {};
        overlayCSS.width = ss.outerWidth();
        overlayCSS.height = ss.outerHeight();
        overlayCSS.top = ss.offset().top;
        overlayCSS.left = ss.offset().left;
        overlayCSS.position = "absolute";
        $(this).css(overlayCSS);

        //Add next/back buttons
        var topVal = ss.outerHeight() / 2 - 24;
        var backCSS = {position:"absolute", top:topVal, left:15};
        var nextCSS = {position:"absolute", top:topVal, right:15};
        $(this).append($('<div></div>').addClass("backButton").attr("id", targetSlideshow + "back").css(backCSS));
        $(this).append($('<div></div>').addClass("nextButton").attr("id", targetSlideshow + "next").css(nextCSS));
    });

    //Start all slideshows
    $('.slideshow').each(function(){
        //Get the ID of this slideshow
        var myID = $(this).attr('id');
        //Add parameters for possible next/back buttons
        var params = {
            prev:   '#' + myID + 'back',
            next:   '#' + myID + 'next'
        }
        //Start
        $(this).cycle(params);
    });
});