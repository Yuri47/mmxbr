@extends('layout.layout')

@section('title', 'Reparo na entrada do carregador do Notebook - ')

@section('ogUrl', 'services/reparo-na-entrada-do-carregador-do-notebook')
@section('ogTitle', 'Reparo na entrada do carregador do Notebook ')
@section('ogDescription', 'Reparo na entrada do carregador do Notebook ')
@section('ogImage', ' ')


 


 
    


 


@section('head')
 

  <!-- Add jQuery library -->
  <script type="text/javascript" src="/fancybox/lib/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

 



  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>


  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

    
  </style>
 



@endsection




 


@section('content')


 

 
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                 
 <div class="  marketing">
 
      <!-- START THE FEATURETTES -->
 
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
           <h1>Reparo na entrada do carregador do Notebook  
                </h1>
          <p class="lead" style="text-align:left"> É bem comum a entrada do carregador no notebook dar defeito, e é de extrma importância 
                                                    consertar isso o mais rápido possível, ou este defeito poderá levar a queima da placa mãe.
                                                  </p>
        <p class="lead" style="text-align:left"> É bem simples identificar se a entrada está quebrada: Se o notebook para de carregar quando mexe no cabo;
                                                Se parou de carregar depois de esbarrar no carregador com ele plugado no notebook.
                                                  </p>
        
        </div>
        <div class="col-md-5 col-md-pull-7 ">
          <img class="featurette-image img-responsive img-responsive-page center-block" src={{asset("/img/serviceImages/service-482b33722de7000c40c59635a8697b85.jpg")}} alt="Generic placeholder image">
        </div>
      </div>
 
      <!-- /END THE FEATURETTES -->

 <hr>
    </div><!-- /.container -->
 
            </div>
             
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    
    <!-- FEATURES WRAP -->
   
    



<div class="container marketing" >
    <div class="row row-centered">
 
           <h2>Imagens </h2>
 
  <p>
    <a class="fancybox" href="/img/serviceImages/service-43df577a1b65ab66bf2260c1d0c12313.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-43df577a1b65ab66bf2260c1d0c12313.jpg" alt="" width="200px" height="auto"/></a>

    <a class="fancybox" href="/img/serviceImages/service-482b33722de7000c40c59635a8697b85.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-482b33722de7000c40c59635a8697b85.jpg" alt="" width="200px" height="auto"/></a>

      </p>
  <hr>
    </div>
</div>
   






@endsection