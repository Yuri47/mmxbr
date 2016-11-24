@extends('layout.layout')

@section('title', '')

@section('ogUrl', '')
@section('ogTitle', 'Macromix Informática Serviços Especializados')
@section('ogDescription', 'this is description from blade bitch')
@section('ogImage', 'app-bg.png')


@section('content')
















    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <img src={{asset("img/mmxlogo.png")}} alt="">
                <h3>A Macromix é uma empresa de informática que está há 13 anos no mercado <br>
                    oferecendo os melhores serviços e produtos de qualidade. Fundada em Outubro <br>
                    de 2003, a Macromix tem como principal compromisso realizar os serviços <br>
                    com total transparência e qualidade por um preço justo.
                    <br><br>
                    <button type="button" class="btn btn-danger btn-lg">Clique aqui e confira nossos serviços</button>
                </h3>
                <br>
                <br>
                <br>
                <hr>
                <br>
            
                <br>
                <br>
                <div class="col-lg-4">
                    <img src={{asset("img/print.png")}} alt="">
                  
                    <h3>Soluções em Impressão</h3>
                    <p>Tem um grande volume de impressão?
                                                            Nós temos a solução para você economizar! Imprima a menos de 0,01 centavo de custo.</p>
                <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                <br>
                </div>
                <div class="col-lg-4">
                    <img src={{asset("img/config.png")}} alt="">
                    <h3>Manutenção</h3>
                    <p>Fazemos manutenção em computadores, notebooks e carregadores, impressoras e monitores. Consertamos também notebooks quebrados.</p>
                       <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                       <br>
                </div>
                <div class="col-lg-4">
                    <img src={{asset("img/responsive.png")}} alt="">
                    <h3>Criação de Sites</h3>
                    <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! <br> Cuidamos de tudo para você.</p>
                       <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                       <br>
                </div>
                 
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    
    <!-- FEATURES WRAP -->
   
    
    


 








@endsection