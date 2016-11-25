@extends('layout.layout')

@section('title', 'Serviços -')

@section('ogUrl', '')
@section('ogTitle', 'Macromix Informática Serviços Especializados')
@section('ogDescription', 'this is description from blade bitch')
@section('ogImage', 'app-bg.png')


@section('content')
















<br><br>
<div class="container">
    <div class="row row-centered">
        
           <h1>Oferecemos serviços especializados e soluções em Informática, Impressão e Web.
                </h1>




              <div class="col-xs-6 col-centered col-fixed att">
                    <div class="item">
                        <div class="content">
                  
                            <img src={{asset("img/windows-icon.png")}} alt="" class="img-rounded img-responsive col-centered">
                            <h3>Manutenção de Computadores e Notebooks</h3>
                            <p>Realizamos manutenção, configuração e instalação de computadores e notebooks.</p>
                            <a href="/services/manutencao-de-computadores-e-notebooks"><button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button></a>
                                
                        </div>
                    </div>
                </div>
                   


   



         
        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/entrada.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Reparo na entrada do carregador do Notebook</h3>
                    <p>Fazemos reparos e trocas da entrada do carregador de notebooks de varias marcas, como Positivo, Samsung, HP, Lenovo, etc.</p>
                    <a href="/services/reparo-na-entrada-do-carregador-do-notebook"><button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button> </a>    

                </div>
            </div>
        </div>
         
        


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/reparoNotebook.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Reparos gerais em Notebooks</h3>
                    <p> As tampas, tela ou dobradiças do seu notebook quebraram? Isso tem solução!</p>
                   <a href="/services/reparos-em-notebooks"> <button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button></a>
                        
                </div>
            </div>
        </div>
          
   


        <div class="col-xs-6 col-centered col-fixed att">
            <div class="item">
                <div class="content">
          
                    <img src={{asset("img/bulk.png")}} alt="" class="img-rounded img-responsive col-centered">
                    <h3>Instalação de Bulk Ink </h3>
                    <p>ECONOMIZE! Tem um grande volume de impressão? Nós temos a solução para você economizar! Imprima a menos de 0,01 centavo de custo.</p>
                    <a href="/services/instalacao-de-bulk-ink"><button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button></a>
                        
                </div>
            </div>
        </div>
           
           
        <div class="col-xs-6 col-centered col-fixed att">
                <div class="item">
                    <div class="content">
              
                        <img src={{asset("img/cartucho.png")}} alt="" class="img-rounded img-responsive col-centered">
                        <h3>Recarga de Cartucho </h3>
                        <p> Fazemos recarga em cartuchos de impressoras jato e tinta e lazer.</p>
                        <a href="/services/recarga-de-cartucho"><button type="button" class="btn btn-danger btn-lg">Ver Detalhes</button></a>
                            
                    </div>
                </div>
            </div>
               
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
                   


    </div>
</div>
   

























 





@endsection