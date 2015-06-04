jQuery(document).ready(function($) {
   
console.log("hello");
var shfaqMenu = false;
var shfaqNenmenu=true;

jQuery('.menu > ul > li > a').click(function() {
        jQuery('.menu li').removeClass('active');
        jQuery(this).closest('li').addClass('active'); 
        var checkElement = jQuery(this).next();
        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            jQuery(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
        }
        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
          jQuery('.menu ul ul:visible').slideUp('normal');
          checkElement.slideDown('normal');
        }
        if(jQuery(this).closest('li').find('ul').children().length == 0) {
          return true;
        } else {
        return false;   
        }     
    });




jQuery('#menuButon').click(function(){
    console.log('klikove');
        var el=document.querySelector("nav");
        if(shfaqMenu){
            console.log('Mbyll Menu');
            el.style.left="-180px";
            shfaqMenu=false;
        }else{
            console.log('Shfaq Menu');
            el.style.left="0px";
            shfaqMenu=true;
        }  
    });

    jQuery(".content").click(function(){
        var el=document.querySelector("nav");
        if(shfaqMenu){
            console.log('Mbyll Menu');
            el.style.left="-180px";
            shfaqMenu=false;
        } 
    });
});