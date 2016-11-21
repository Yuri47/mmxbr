<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Macromix">
    <meta name="author" content="Yuri Alexs">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <meta name="theme-color" content="‪#0000FF">

    <title>@yield('title') Macromix Informática</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("css/bootstrap.css")}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset("css/main2.css")}} rel="stylesheet">
    <link href={{asset("css/font-awesome.css")}} rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src={{asset("js/jquery.min.js")}}></script>
    <script src={{asset("js/smoothscroll.js")}}></script>
    


  <meta property="og:url"                content="http://wkflmqlikg.localtunnel.me/new/@yield('ogUrl')" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="@yield('ogTitle')" />
  <meta property="og:description"        content="@yield('ogDescription')" />
  <meta property="og:image"              content="http://wkflmqlikg.localtunnel.me/img/@yield('ogImage')" />







 
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

     
        <div id="navigation" class="navbar navbar-default navbar-fixed-top navbarmmx">
          <div class="container container-navbarmmx">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><b>Macromix</b></a>
            </div>
            <div class="navbar-collapse collapse mynavbar">
              <ul class="nav navbar-nav">
                <li ><a href="/" class="">Home</a></li>
                <li><a href="/services" class="">Serviços</a></li>
                <li><a href=" " class="">Criação de Sites</a></li>
                <li><a href="/teste" class="">Dicas</a></li>
                <li><a href="" class="">Contato</a></li>
              </ul>
            </div> 
          </div>
        </div>





<!-- 
https://www.sitepoint.com/community/t/how-to-center-align-the-bootstrap-navigation/43883/3
    <nav class="navbar navbar-default" role="navigation">
                <div class="container"> 
                      
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a href="#" class="navbar-brand">Esthetics Studio</a> </div>
                  
                        <div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav ">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li class="mylogo"><a href="#"><img src=" http://placehold.it/150x50" alt="Logo"></a></li>
                                        <li><a href="#">Life</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                </ul>
                        </div>
                   
                </div>
                
        </nav>

 -->




    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1>Macromix</h1>
                    <h3>Assistência técnica especializada.</h3>
                    <br>
                </div>
                
            
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->



 

@yield('content')









    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
           
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                            <h1 class="centered">Criação de Sites</h1>
                          <img src={{asset("img/item-01.png")}}  alt="">
                        </div>
                        <div class="item">
                            <h1 class="centered">Instalação de Bulk Ink</h1>
                          <img src={{asset("img/item-02.png")}} alt="">
                        </div>

                      </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>    
        </div><!-- /container -->
    </div>  

 









 


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>Macromix</h3>
                   <address>
                     
                    Quadra Central 01 Conjunto D Lote 04 Loja 03<br>
                    Santa Maria, Distrito Federal<br>
                    Telefone: (61) 3029-2859<br>
                    Funcionamento: segunda a sexta de 09:00 as 18:00, sábado de 09:00 as 14:00<br>
                    CNPJ: 11.113.091/0001-98 <br>


                  </address>
            </div>
            
            <div class="col-lg-7">
                <h3>Envie-nos uma mensagem</h3>
                <br>
                <form role="form" action="mail" method="post" enctype="plain"> 
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                    <label for="name1">Seu Nome</label>
                    <input type="name" required name="name" class="form-control" id="name1" placeholder="Seu Nome">
                  </div>
                  <div class="form-group">
                    <label for="name1">Telefone (opcional)</label>
                    <input type="name"  name="phone" class="form-control" id="name1" placeholder="Telefone">
                  </div>
                  <div class="form-group">
                    <label for="email1">Seu Email</label>
                    <input type="email" required name="email" class="form-control" id="email1" placeholder="Seu Email">
                  </div>
                  <div class="form-group">
                    <label for="name1">Assunto</label>
                    <input type="name" required name="subject" class="form-control" id="name1" placeholder="Assunto">
                  </div>
                  <div class="form-group">
                    <label>Sua Mensagem</label>
                    <textarea class="form-control" required name="message" rows="3"></textarea>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-large btn-success">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c" class="ftr">
        <div class="container">
            <p>Desenvolvido por: Macromix</p>
        
         
        </div>
    </div>


 

<footer id="site_footer">
      <div class="footernew">
     <div class="row">
 <a href="/">  <div class="col-xs-3 col-md-3 um"><i class="fa fa-home fa-2x" aria-hidden="true"></i>
</div> </a>
  <div class="col-xs-3 col-md-3 dois"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
</div>
 <div class="col-xs-3 col-md-3 tres"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
</div>
  <a href="tel:61991829742"> <div class="col-xs-3 col-md-3 quatro"><i class="fa fa-phone fa-2x" aria-hidden="true"></i>
</div></a>
 
</div>
      </div>      
    </footer>
 


 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src={{asset("js/bootstrap.js")}}></script>
    <script src={{asset("js/jquery.min.1.11.3.js")}}></script>
    <script>
    $('.carousel').carousel({
      interval: 3500
    })
    </script>









  
<script type="text/javascript" >
 
 

$("div#editSuccess").hide()


$("button#1").click(function() {
            //$("p").hide()
            //$("h1.dois").show("slow")
            

$.ajax({
  method: "GET",
  url: "{{ route('editclient') }}",
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



















 

  </body>
</html>
