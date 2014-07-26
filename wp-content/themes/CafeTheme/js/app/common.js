app.common = 
{
    init: function(){$("#menu-item-52 a").text("");var mouseover_menu=false, mouseover_item=false;$('ul.sub-menu').hide();$('li.menu-item-has-children').hover(function(){mouseover_menu = true;$( 'ul.sub-menu').slideDown(500);},function(){mouseover_menu = false;});$('.ul.sub-menu').hover(function(){mouseover_item = true;},function(){mouseover_item = false;});$( 'ul.sub-menu,li.menu-item-has-children').mouseout(function(){if ( !mouseover_item && !mouseover_menu )$('ul.sub-menu').slideUp(500);});},
    finalize: function(){}
};