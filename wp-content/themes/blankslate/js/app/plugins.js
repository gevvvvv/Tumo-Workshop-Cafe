jQuery.fn.fadeOutAndRemove = function(speed){
    speed = typeof speed !== 'undefined' ? speed : 300;
    $(this).fadeOut(speed,function(){
        $(this).remove();
    });
};
