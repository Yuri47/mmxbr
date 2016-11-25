
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src={{asset("js/bootstrap.js")}}></script>
  

    <script>
    $('.carousel').carousel({
      interval: 3500
    })
    </script>



<script type="text/javascript" >
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

  </script>

 
     
<script type="text/javascript" >
 
 

$("div#msgSuccess").hide()
$("p#send").hide()


$("button#2").click(function(event) {

      $("div#msgSuccess").hide("slow")
      $("p#send").hide()
      $("div#contactForm").show("slow")

        
        $('input#subject').val("")
        $('textarea#message').val("")

  });
 
$("button#1").click(function(event) {
  event.preventDefault();
            //$("p").hide()
            //$("h1.dois").show("slow")
          

$.ajax({
  method: "POST",
  url: "/mail",
  data: { 
          _token:$('input#_token').val(),
          name: $('input#name').val(), 
          phone: $('input#phone').val(), 
          email: $('input#email').val(), 
          subject: $('input#subject').val(), 
          message: $('textarea#message').val(), 
   
},
  success:function(){
       
 $("div#msgSuccess").show("slow")
 $("div#contactForm").hide("fast")
// $("p#msgSuccess").text("");



    },
  error:function(){
      $("p#send").show()
      $("p#send").text('Insira todas as informações.')    
    },
  beforeSend: function(){
     $("p#send").show() 
   },
})
  .done(function( msg ) {
    //alert( "Data Saved: " + msg );

var object = msg; //pega o objeto msg que vem da função ajax do servicecontroller
 


  });

 
        });
 
   
  
</script>



 
