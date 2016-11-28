<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Macromix Informática serviços especializados">
    <meta name="author" content="Yuri Alexs">
    <link rel="shortcut icon" href={{asset("img/favicon.ico")}}>
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
    


  <meta property="og:url"                content="http://{{config('config.url')}}/@yield('ogUrl')" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="@yield('ogTitle')" />
  <meta property="og:description"        content="@yield('ogDescription')" />
  <meta property="og:image"              content="http://{{config('config.url')}}/img/@yield('ogImage')" />
  <meta property="og:image:width"        content="1200" />
  <meta property="og:image:height"       content="630" />




  @yield('head')



 
  </head>