@extends('layout.layout')

@section('title', 'Serviços -')

@section('ogUrl', '')
@section('ogTitle', 'Macromix Informática Serviços Especializados')
@section('ogDescription', 'this is description from blade bitch')
@section('ogImage', 'app-bg.png')


@section('content')

















<div class="container">
    <div class="row row-centered">
        
           <h3>Oferecemos serviços especializados Lorem ipsum dolor sit amet, consectetur 
                    adipisicing elit. Necessitatibus officiis ullam mollitia magnam vero blanditiis 
                    amet illum fuga, vitae nisi, sint similique dolore cum pariatur quaerat voluptas nam distinctio minus?
                </h3>




        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
                    <img src={{asset("img/print.png")}} alt="">
                  
                    <h3>Soluções em Impressão</h3>
                    <p>Tem um grande volume de impressão?
                    Nós temos a solução para você economizar! Imprima a menos de 0,01 centavo de custo.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                 
                </div>
            </div>
        </div>



         
        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/config.png")}} alt="">
                    <h3>Manutenção</h3>
                    <p>Fazemos manutenção em computadores, notebooks e carregadores, impressoras e monitores. Consertamos também notebooks quebrados.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>     

                </div>
            </div>
        </div>
         
        


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/responsive.png")}} alt="">
                    <h3>Criação de Sites</h3>
                    <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! <br> Cuidamos de tudo para você.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                        
                </div>
            </div>
        </div>
          
   


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/responsive.png")}} alt="">
                    <h3>Criação de Sites</h3>
                    <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! <br> Cuidamos de tudo para você.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                        
                </div>
            </div>
        </div>
           

    </div>
</div>
   

























 





@endsection