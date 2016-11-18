<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Yuri Alexs">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <meta name="theme-color" content="‪#0000FF">

    <title>@yield('title') - Macromix</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("css/bootstrap.css")}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset("css/main2.css")}} rel="stylesheet">
    
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
                <li class="active"><a href="#home" class="smothscroll">Home</a></li>
                <li><a href="#desc" class="smothscroll">Descrição</a></li>
                <li><a href="#showcase" class="smothScroll">Showcase</a></li>
                <li><a href="#contact" class="smothScroll">Contato</a></li>
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





 


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>Address</h3>
                <p>
                QC 01 Conjunto D Lote 04 Loja 03,<br/>
                Santa Maria - DF,<br/>
                72.535-040<br/>
                CNPJ: 3265848774-958/548
                </p>
            </div>
            
            <div class="col-lg-7">
                <h3>Envie-nos uma mensagem</h3>
                <br>
                <form role="form" action="#" method="post" enctype="plain"> 
                  <div class="form-group">
                    <label for="name1">Seu Nome</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <label for="email1">Seu Email</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Sua Mensagem</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-large btn-success">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>Yuri Alexs</p>
        
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src={{asset("js/bootstrap.js")}}></script>
    <script>
    $('.carousel').carousel({
      interval: 3500
    })
    </script>


 

  </body>
</html>
