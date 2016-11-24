



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

                  <div class="fb-page" data-href="https://www.facebook.com/macromixbr" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/macromixbr" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/macromixbr">Macromix Informática</a></blockquote></div>
            </div>

            
            <div class="col-lg-7">

              <div class="alert alert-success centered" id="msgSuccess" role="alert">
                      <h1 style="color:white">Mensagem Enviada</h1> <h2 style="color:white">Em breve entraremos em contato. </h2>
                      <button type="button" id="2" class="btn btn-large btn-success">Enviar Nova Mensagem</button>
                      </div>


                
                <div id="contactForm">
                  <h3>Envie-nos uma mensagem</h3>
                <br>
                <form role="form" action="/mail" method="post" enctype="plain"> 
                  <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                    <label for="name1">Seu Nome</label>
                    <input type="name" required name="name" id="name" class="form-control" id="name1" placeholder="Seu Nome">
                  </div>
                  <div class="form-group">
                    <label for="name1">Telefone (opcional)</label>
                    <input type="name"  name="phone" id="phone" class="form-control" id="name1" placeholder="Telefone">
                  </div>
                  <div class="form-group">
                    <label for="email1">Seu Email</label>
                    <input type="email" required name="email" id="email" class="form-control" id="email1" placeholder="Seu Email">
                  </div>
                  <div class="form-group">
                    <label for="name1">Assunto</label>
                    <input type="name" required name="subject" id="subject" class="form-control" id="name1" placeholder="Assunto">
                  </div>
                  <div class="form-group">
                    <label>Sua Mensagem</label>
                    <textarea class="form-control" required name="message" id="message" rows="3"></textarea>
                  </div>
                  <br>
                  
                  <button type="submit" id="1" class="btn btn-large btn-success">ENVIAR</button> <p id="send">Enviando...</p>
                </form>
                </div>
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

<a href="/services">  <div class="col-xs-3 col-md-3 dois"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
</div> </a>

<a href="fb://page/1664380157206928" target="_blank">  <div class="col-xs-3 col-md-3 tres"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
</div> </a>

  <a href="tel:61991829742"> <div class="col-xs-3 col-md-3 quatro"><i class="fa fa-phone fa-2x" aria-hidden="true"></i>
</div></a>
 
</div>
      </div>      
    </footer>