@extends('layout.layout')

@section('title', 'Macromix')

@section('ogUrl', '')
@section('ogTitle', 'Macromix Informática Serviços Especializados')
@section('ogDescription', 'this is description from blade bitch')
@section('ogImage', 'app-bg.png')


@section('content')


<style type="text/css">
  




/* centered columns styles */
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
body {
    padding-bottom:40px;
}
h1 {
    margin:40px 0px 20px 0px;
  color:#95c500;
    font-size:28px;
    line-height:34px;
    text-align:center;
}
[class*="col-"] {
    padding-top:10px;
    padding-bottom:15px;
  border:1px solid #80aa00;
  background:#d6ec94;
}
[class*="col-"]:before {
    display:block;position:relative;
    content:"COLUMN";
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
    content:"Content";
    font-family:sans-serif;
    font-size:12px;
    letter-spacing:1px;
    color:#747474;
}

/* centering styles for jsbin */
html,
body {
    width:100%;
    height:100%;
}
html {
    display:table;
}
body {
    display:table-cell;
    vertical-align:middle;
}








</style>










<h1>With width auto</h1>

<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-2 col-centered"><div class="item"><div class="content"></div></div></div>
    </div>
</div>

<h1>With fixed width</h1>
  
<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>
    </div>
</div>
  
<h1>With min-width</h1>
  
<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered col-min"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-min"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-min"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-min"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-min"><div class="item"><div class="content"></div></div></div>
    </div>
</div>
  
<h1>With max-width</h1>
  
<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered col-max"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-max"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-max"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-max"><div class="item"><div class="content"></div></div></div>
        <div class="col-xs-6 col-centered col-max"><div class="item"><div class="content"></div></div></div>
    </div>
</div>
  
@endsection