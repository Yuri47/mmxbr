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
            </div>
            
            <div class="col-lg-7">
                <h3>Envie-nos uma mensagem</h3>
                <br>
                <form role="form" action="mail" method="post" enctype="plain"> 
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                    <label for="name1">Seu Nome</label>
                    <input type="name" required name="name" class="form-control" id="name1" placeholder="Seu Nome">
                  </div>
                  <div class="form-group">
                    <label for="name1">Telefone (opcional)</label>
                    <input type="name"  name="phone" class="form-control" id="name1" placeholder="Telefone">
                  </div>
                  <div class="form-group">
                    <label for="email1">Seu Email</label>
                    <input type="email" required name="email" class="form-control" id="email1" placeholder="Seu Email">
                  </div>
                  <div class="form-group">
                    <label for="name1">Assunto</label>
                    <input type="name" required name="subject" class="form-control" id="name1" placeholder="Assunto">
                  </div>
                  <div class="form-group">
                    <label>Sua Mensagem</label>
                    <textarea class="form-control" required name="message" rows="3"></textarea>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-large btn-success">ENVIAR</button>
                </form>
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
  <div class="col-xs-3 col-md-3 dois"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
</div>
 <div class="col-xs-3 col-md-3 tres"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
</div>
  <a href="tel:61991829742"> <div class="col-xs-3 col-md-3 quatro"><i class="fa fa-phone fa-2x" aria-hidden="true"></i>
</div></a>
 
</div>
      </div>      
    </footer>