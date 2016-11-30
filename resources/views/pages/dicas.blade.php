@extends('layout.layout')

@section('title', 'Dicas - ')

@section('ogUrl', 'dicas')
@section('ogTitle', 'Dicas De Informática')
@section('ogDescription', 'Confira nossas dicas de informática')
@section('ogImage', '')


 


  


@section('content')



<style type="text/css">/* centered columns styles */
.row-centered {
    text-align:center;
}
.h1dicas {
    padding-bottom: 30px;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:center;
    /* inline-block space fix */
    margin-right:-4px;
    padding-bottom: 20px;
}
.col-fixed {
    /* custom width */
    width:33.333333333%;
    max-height: 500px;
}
.col-min {
    /* custom min width */
    min-width:320px;
}
.col-max {
    /* custom max width */
    max-width:320px;
}

/* visual styles */
 
 
 
.content {
    display:table-cell;
    vertical-align:middle;
    text-align:center;


}
.content:before {
     
    font-family:sans-serif;
    font-size:12px;
    letter-spacing:1px;
    color:#747474;
}

/* centering styles for jsbin */

 
 
 

 
 

.borda {
 
    border: 1px #E6E6E6 solid;
    
}
.borda > h2 {
    min-height: 80px;
}



  @media screen and (max-width:768px) {

.col-fixed {
    /* custom width */
    width:100%;
    max-height: 500px;
}




  } /* media 768  */
 
</style>







 
    <div id="intro">
        <div class="container">
            <div class="row centered">

                   @if (Auth::guest())
                             <h1>convidado</h1>
                        @else
                             
                                    {{ Auth::user()->name }}  
                                    <h1>logado</h1>
                        @endif
                        {{$teste}}

                        {{$posts}}

 

                        @foreach ($posts as $p)
                            {{$p->content}}
                        @endforeach

              <h1 class="h1dicas">Dicas Macromix </h1>
  
<div class="container">
    <div class="row row-centered">











    @foreach ($posts as $p)

        <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/postImages/$p->image")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">{{$p->title}}</a>
                </h2>
                <p class="testewrap">{{$p->description}}</p>
                <a href="/dicas/{{$p->url}}">
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </a>
                </div>
        </div>


    @endforeach


           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

           <div class="col-xs-6 col-centered col-fixed ">
            
          <a href="#">
                    <img class="img-responsive-dicas" src={{asset("img/ogimagesite2.jpg")}} alt="">
                </a>
                <div class="borda">
                <h2 class="h2-blog">
                    <a href="#">Dicas sobre Notebooks</a>
                </h2>
                <p class="testewrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <button type="button" class="btn btn-danger btn-lg" style="text-align:center; margin-bottom: 20px;">Leia Mais</button>
                </div>
        </div>

        
 
 

     

         
    </div>
</div>


            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    
    <!-- FEATURES WRAP -->
   
    

 


@endsection