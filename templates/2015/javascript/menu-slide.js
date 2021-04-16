/**
 * Created by Pham on 9/2/2015.
 */
$(function () {
	/*
    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).stop(true, true).fadeIn("slow");
            $(this).toggleClass('open');
            //$('b', this).toggleClass("caret caret-up");
        },
        function () {
            $('.dropdown-menu', this).stop(true, true).fadeOut("slow");
            $(this).toggleClass('open');
            //$('b', this).toggleClass("caret caret-up");
        }
    );
    */
	/*
    $(document).on("mouseover", ".dropdown", function() {  
		$('.dropdown-menu', this).stop(true, true).fadeIn("slow");
        $(this).addClass('open');
        //$('b', this).toggleClass("caret caret-up");
	});
    */
    $(document).on("mouseleave", ".menu-original .dropdown", function() {
            $('.dropdown-menu', this).css('display', 'none');
    });
    $('.left-nav li:has(ul)')
        .addClass('has-subnav')
        .each(function () {
            var $li = $(this),
            	$a = $('> a', $li);
            $a.on('click', function () {
                $li.addClass('active');
                return false;
            });
            $li.on('mouseenter', function () {
                $li.addClass('active');
            });
            $li.on('mouseleave', function () {
                $li.removeClass('active');
            });
        });
    $('.circle').mosaic({
        opacity		:	0.8			//Opacity for overlay (0-1)
    });

    $('.bar2').mosaic({
        animation	:	'slide'		//fade or slide
    });
    
    //	Create menu fix top
    $('.header-menu').addClass('menu-original').clone().insertAfter('.header-menu').addClass('menu-fixed').removeClass('menu-original');
    $('.menu-fixed').find('#collapse-search').attr('id', 'collapse-search-fixed');
    $('.menu-fixed').find('.navbar-search').attr('data-target', '#collapse-search-fixed');
    $('.menu-fixed').find('#collapse-menu').attr('id', 'collapse-menu-fixed');
    $('.menu-fixed').find('.navbar-menu').attr('data-target', '#collapse-menu-fixed');
    $(window).scroll(function(){
    	var menuOnTop = $('.header-menu').offset().top - $(window).scrollTop();
    	if(menuOnTop <= 0){
    		$('.menu-fixed').slideDown();
    	}else{
    		$('.menu-fixed').slideUp();
    	}
        return false;
    });
    
    //	Create menu left mobile
    $('.left-nav').clone().insertAfter('.left-nav').addClass('left-nav-mobile navbar navbar-default').removeClass('left-nav');
    $('.left-nav-mobile').children('ul').children('li').addClass('dropdown');
    $('.left-nav-mobile').children('ul').children('li').children('a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown');
    $('.left-nav-mobile').children('ul').children('li').children('ul').attr('class','dropdown-menu');
    $('.left-nav-mobile').children('ul').wrap('<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2"></div>').addClass('nav navbar-nav');
    $('.left-nav-mobile').find('.row').children('div').children().unwrap();
    $('.left-nav-mobile').find('.row').children().unwrap();
    
    $('.navbar').on('show.bs.collapse', function () {
        var actives = $(this).find('.collapse.in'),
            hasData;
        
        if (actives && actives.length) {
            hasData = actives.data('collapse')
            if (hasData && hasData.transitioning) return
            actives.collapse('hide')
            hasData || actives.data('collapse', null)
        }
    });
    
    //	Form search
    var submitClick = false;
    $('.menu-fixed').on({
    	blur: function(){
    		if(submitClick) return submitClick = false;
        	$(this).fadeOut();
    	},
    	focus: function(){
    		submitClick = false;
    	}
    }, '#collapse-menu-fixed .txt-search');
    $('.menu-fixed').on({
    	click: function(){
	    	var parent = $(this).parents('.form-search-top .form-group');
	    	if(parent.children('.txt-search').css('display') == 'none'){
	    		parent.children('.txt-search').fadeIn();
	    		parent.children('.txt-search').focus();
	    		return false;
	    	}else if(parent.children('.txt-search').val().trim() == ''){
	    		parent.children('.txt-search').fadeOut();
	    		return false;
	    	}
    	},
    	mousedown: function(){
    		submitClick = true;
    	}
    }, '#collapse-menu-fixed .submit-search');
    
    $('.conference-include').addClass('active');
});