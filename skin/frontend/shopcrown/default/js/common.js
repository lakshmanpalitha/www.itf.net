jQuery(document).ready(function(){
	jQuery("[rel=tooltip]").tooltip();
	jQuery("#back-top").hide();
		jQuery('#back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		jQuery('.menuBox').click(function() {
		if (jQuery('#menuInnner').is(":hidden"))
		{
		jQuery('#menuInnner').slideDown("fast");
		} else {
		jQuery('#menuInnner').slideUp("fast");
		}
		return false;
		});





    /* Tile Banner Section */
    function tileBanner() {
        var tileHeight, tileWidth, detailsHeight, detailsWidth, tile, details;
        jQuery('.tile').mouseenter(function() {
            tile = jQuery(this);
            tileHeight=tile.outerHeight();
            tileWidth=tile.outerWidth();
            details=tile.find('.details');
            detailsHeight=details.outerHeight();
            detailsWidth=details.outerWidth();

            tile.find('h2').stop().slideDown();
            details.css('left', (tileWidth/2) - (detailsWidth/2));
            details.stop().animate({
                top: (tileHeight/2) - (detailsHeight/2),
                opacity:1
            }, 500,'easeOutQuart', function() {
                // Animation complete.
            });

        })
            .mouseleave(function() {
                tile.find('h2').stop().slideUp();
                details.stop().animate({
                    top: 0 - detailsHeight,
                    opacity:0
                }, 250,'easeInQuart', function() {
                    // Animation complete.
                });


            });

    };
    if(jQuery('.tile-banner').length){
        tileBanner();
    }



	});
	
	
	
	jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 50) {
				jQuery('#back-top').fadeIn();
				jQuery('body.headerfix').addClass('hideTopNav');
			} else {
				jQuery('#back-top').fadeOut();
				jQuery('body.headerfix').removeClass('hideTopNav');
			}
		});
	
		
