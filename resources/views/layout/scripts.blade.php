

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

<!-- 
     
<script type="text/javascript" >
 
 

$("div#editSuccess").hide()


$("button#1").click(function() {
            //$("p").hide()
            //$("h1.dois").show("slow")
            

$.ajax({
  method: "POST",
  url: "/mail",
  data: { name: $('input#nameEdit').val(), 
          fone: $('input#foneEdit').val(), 
          address: $('input#addressEdit').val(), 
  id: $('input#id').val() 
}
})
  .done(function( msg ) {
    //alert( "Data Saved: " + msg );

var object = msg; //pega o objeto msg que vem da função ajax do servicecontroller
 
$("button#1").text(msg["name"] );
$("input#textFinal").val(msg["name"]);
$("div#divEdit").hide("slow")
$("div#editSuccess").show("slow")

  });

 
        });
 
   
  
</script>





 -->
