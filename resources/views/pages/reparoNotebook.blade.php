@extends('layout.layout')

@section('title', 'Conserto de Fonte de Notebook')

@section('ogUrl', '/services/conserto-de-fonte-de-notebook')
@section('ogTitle', 'Conserto de Fonte de Notebook')
@section('ogDescription', 'Realizamos conserto em fontes de notebooks')
@section('ogImage', '2product-2f9916b48d1cbb4e61f3c44355df8a48.png.jpeg')


 


 
    


 


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
           <h1>Reparos Gerais em Notebooks  
                </h1>
          <p class="lead" style="text-align:left"> Com o tempo as dobradiças vão ficando mais apertadas fazendo com que quebrem as tampas, as bases, as dobradiças e até mesmo a tela do notebook. Também trocamos telas quebradas e entrada da fonte com defeito. Tudo isso tem solução.

          </p>
        </div>
        <div class="col-md-5 col-md-pull-7 ">
          <img class="featurette-image img-responsive img-responsive-page center-block" src={{asset("img/serviceImages/product-5df915682b4fff693b50b27542578094.png.jpeg")}} alt="Generic placeholder image">
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
        <a class="fancybox" href="/img/serviceImages/service-7c7e80e7fa204c26d94b04263fbeb735.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-7c7e80e7fa204c26d94b04263fbeb735.jpg" alt="" width="200px" height="auto"/></a>

    <a class="fancybox" href="/img/serviceImages/service-43cb50366fb1d48ecb64516ba9924624.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-43cb50366fb1d48ecb64516ba9924624.jpg" alt="" width="200px" height="auto"/></a>
    
    <a class="fancybox" href="/img/serviceImages/service-932c12d616e43d4cc8dd673c677a78a3.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-932c12d616e43d4cc8dd673c677a78a3.jpg" alt="" width="200px" height="auto"/></a>

    <a class="fancybox" href="/img/serviceImages/service-8898c69f574e15d042b8e2b3692984b1.jpg" data-fancybox-group="gallery" title="Reparo realizado na entrada do carregador"><img src="/img/serviceImages/service-8898c69f574e15d042b8e2b3692984b1.jpg" alt="" width="200px" height="auto"/></a>

      </p>
  <hr>
    </div>
</div>
   






@endsection