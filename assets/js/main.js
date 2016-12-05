var pos = 0;

$(document).on('ready' ,function() {
  var width = $('.slider_container').width();
  $('.slide').each(function(i,e){
      addBackground(e,width,true);
  });
  intv = setInterval(handleClick,10000);

  $('a.smoothScroll').smoothScroll({
    scrollTarget: $(this).val()
  });
  // MENU RESPONSIVE
  $(".menu_bar").click(function() {
    $("header nav").slideToggle(500);
    $("header nav li").click(function() {
      $("header nav").slideUp(500);
    });
  });
});

function addBackground(element,width,setSize){
  if(!width) width = $('html').width();
	if(setSize){
		$(element).css({
			'width': width,
			'heigth': $('html').height()
		});
	}
	var imagen = $(element).data('background');
    $(element).css('background-image',"url("+(imagen+".jpg")+")");
}

function handleClick(){
    var slide_target = 0;
    if($(this).parent().hasClass('slider_controls')){
        slide_target = $(this).index();
        pos = slide_target;
        clearInterval(intv);
        intv = setInterval(handleClick,10000);
    }
    else{
        pos++;
        if(pos>=$('.slide').length){
            pos = 0;
        }
        slide_target= pos;
    }
   /*$('.slideContainer').animate({
       'margin-left':-(slide_target * $('.slider_container').width())+'px'
   },'slow'); */
    $('.slideContainer').fadeOut('slow',function(){
		$(this).animate({
			'margin-left':-(slide_target * $('.slider_container').width())+'px'
		},'slow',function(){
			$(this).fadeIn();
		});
	});
}
