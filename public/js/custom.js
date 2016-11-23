jQuery(document).ready(function() {
  
  
     jQuery(window).scroll(function() {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if(windowScrollPosTop >= 150) {

   
          jQuery(".navbarmmx").css({"background-color": "rgba(0,0,0,.6)",});
           
         
        }
        else{
          jQuery(".navbarmmx").css({"background-color": "rgba(0,0,0,.0)",});
            
            
          
        }
     });

      
     

});