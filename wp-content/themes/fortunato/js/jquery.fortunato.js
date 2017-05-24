(function($) {
	"use strict";
	$(document).ready(function() {
		/*-----------------------------------------------------------------------------------*/
		/*  Set height of header
		/*-----------------------------------------------------------------------------------*/ 
			function setHeight() {
				var windowHeight = $(window).innerHeight();
				$('.site-header, .site-brand-main').css('height', windowHeight);
			};
			setHeight();
		/*-----------------------------------------------------------------------------------*/
		/*  Detect touch screen device
		/*-----------------------------------------------------------------------------------*/ 
			var mobileDetect = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
		/*-----------------------------------------------------------------------------------*/
		/*  Home icon in main menu
		/*-----------------------------------------------------------------------------------*/ 
			if($('body').hasClass('rtl')) {
				$('.main-navigation .menu-item-home:first-child > a').append('<i class="fa fa-home spaceLeft"></i>');
			} else {
				$('.main-navigation .menu-item-home:first-child > a').prepend('<i class="fa fa-home spaceRight"></i>');
			}
		/*-----------------------------------------------------------------------------------*/
		/*  If Comment Metadata exist or Edit Comments Link exist
		/*-----------------------------------------------------------------------------------*/ 
			if ( $( '.comment-metadata' ).length ) {
				$('.comment-metadata').addClass('smallPart');
			}
			if ( $( '.reply' ).length ) {
				$('.reply').addClass('smallPart');
			}
		/*-----------------------------------------------------------------------------------*/
		/*  Manage Sidebar
		/*-----------------------------------------------------------------------------------*/ 
			$('.openSidebar').click(function() {
				if($('body').hasClass('sidebar-open-default')) {
					$('body').removeClass('sidebar-open-default')
				} else {
					$('.widget-area, #page.site, .openSidebar, .openSearch').toggleClass('yesOpen');
				}
			});
		/*-----------------------------------------------------------------------------------*/
		/*  Search button
		/*-----------------------------------------------------------------------------------*/ 
			$('.openSearch').click(function() {
				$('#search-full').fadeIn(300);
				if (!mobileDetect) {
					$("#search-full #search-field").focus();
				}
			});
			$('.closeSearch').click(function() {
				$('#search-full').fadeOut(300);
			});
		/*-----------------------------------------------------------------------------------*/
		/*  Change Color Sidebar & Search Button
		/*-----------------------------------------------------------------------------------*/ 
			var $filter = $('.site-header');
			$(window).scroll(function () {
				if ($(window).scrollTop() > $filter.outerHeight() - 50 ) {
					$('.openSidebar, .openSearch').addClass("sidebarColor");
				} else if ($(window).scrollTop() < $filter.outerHeight() + 50 ) {
					$('.openSidebar, .openSearch').removeClass("sidebarColor");
				}
			});
		/*-----------------------------------------------------------------------------------*/
		/*  Menu Widget
		/*-----------------------------------------------------------------------------------*/
			if ( $( 'aside ul.menu' ).length ) {
				$('aside ul.menu').find("li").each(function(){
					if($(this).children("ul").length > 0){
						$(this).append("<span class='indicatorBar'></span>");
					}
				});
				$('aside ul.menu > li.menu-item-has-children .indicatorBar, .aside ul.menu > li.page_item_has_children .indicatorBar').click(function() {
					$(this).parent().find('> ul.sub-menu, > ul.children').toggleClass('yesOpenBar');
					$(this).toggleClass('yesOpenBar');
					var $self = $(this).parent();
					if($self.find('> ul.sub-menu, > ul.children').hasClass('yesOpenBar')) {
						$self.find('> ul.sub-menu, > ul.children').slideDown(300);
					} else {
						$self.find('> ul.sub-menu, > ul.children').slideUp(200);
					}
				});
			}
		/*-----------------------------------------------------------------------------------*/
		/*  Detect touch screen device
		/*-----------------------------------------------------------------------------------*/ 
		if (!mobileDetect) {
			/*-----------------------------------------------------------------------------------*/
			/*  Resize Header
			/*-----------------------------------------------------------------------------------*/ 
				$(window).resize(function() {
					setHeight();
				});
			/*-----------------------------------------------------------------------------------*/
			/*  Scroll To Top
			/*-----------------------------------------------------------------------------------*/ 
				$(window).scroll(function(){
					if ($(this).scrollTop() > $('.site-header').outerHeight()) {
						$('#toTop').fadeIn(300);
					} else {
						$('#toTop').fadeOut(300);
					}
				}); 
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 1000);
					return false;
				});
		}
	});
})(jQuery);