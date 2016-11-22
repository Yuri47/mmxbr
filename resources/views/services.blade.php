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
                    <img src={{asset("img/product-2f9916b48d1cbb4e61f3c44355df8a48.png")}} alt="" class="img-rounded img-responsive col-centered">
                  
                    <h3>Conserto de Fonte de Notebook</h3>
                    <p>Seu carregador do notebook parou de funcionar? Ele ainda pode ter conserto.</p>
                    <a href="/services/conserto-de-fonte-de-notebook"><button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button></a>
                 
                </div>
            </div>
        </div>



         
        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/config.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Manutenção</h3>
                    <p>Fazemos manutenção em computadores, notebooks e carregadores, impressoras e monitores. Consertamos também notebooks quebrados.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>     

                </div>
            </div>
        </div>
         
        


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/responsive.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Criação de Sites</h3>
                    <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! <br> Cuidamos de tudo para você.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                        
                </div>
            </div>
        </div>
          
   


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/responsive.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Criação de Sites</h3>
                    <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! <br> Cuidamos de tudo para você.</p>
                    <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button>
                        
                </div>
            </div>
        </div>
           

    </div>
</div>
   

























 





@endsection