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
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
.col-fixed {
    /* custom width */
    width:320px;
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
 
.colblog {
    padding-top:10px;
    padding-bottom:15px;
    border:1px solid #80aa00;
    background:#d6ec94;
}
.colblog:before {
    display:block;position:relative;
    
    margin-bottom:8px;
    font-family:sans-serif;
    font-size:10px;
    letter-spacing:1px;
    color:#658600;
    text-align:left;
}
.item {
    width:100%;
    height:100%;
    border:1px solid #cecece;
    padding:16px 8px;
    background:#ededed;
    background:-webkit-gradient(linear, left top, left bottom,color-stop(0%, #f4f4f4), color-stop(100%, #ededed));
    background:-moz-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
    background:-ms-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
}

/* content styles */
.item {
    display:table;

}
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

 
.module {
  width: 250px;
  margin: 0 0 1em 0;
  overflow: hidden;
}
.module p {
  margin: 0;
}
 

.last-line {
  height: 3.9em; /* exactly three lines */
  text-overflow: -o-ellipsis-lastline;
}
 
 .imgblog {
    max-width: 100%;
    max-height: 100%;
 }
 
</style>







 
    <div id="intro">
        <div class="container">
            <div class="row centered">

                

                
              <h1>With fixed width</h1>
  
<div class="container">
    <div class="row row-centered">

        <div class="col-xs-6 col-centered col-fixed colblog">
            
            <div class="item">
                <div class="content">
                    <h2>Dicas sobre Notebooks</h2>
                </div>
            </div>
            <div class="item">
                <div class="content">
                   <img src={{asset("img/ogimagesite2.jpg")}} alt="" class="imgblog">
                </div>
            </div>
            <div class="item">
                <div class="content  ">
             <div class="module last-line">
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</div>...
                </div>
            </div>
            
        </div>

        <div class="col-xs-6 col-centered col-fixed colblog"><div class="item"><div class="content">12313</div></div></div>
        <div class="col-xs-6 col-centered col-fixed colblog"><div class="item"><div class="content">12313</div></div></div>
        <div class="col-xs-6 col-centered col-fixed colblog"><div class="item"><div class="content">12313</div></div></div>
        <div class="col-xs-6 col-centered col-fixed colblog"><div class="item"><div class="content">12313</div></div></div>
    </div>
</div>


            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    
    <!-- FEATURES WRAP -->
   
    

 


@endsection