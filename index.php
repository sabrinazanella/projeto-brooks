<!DOCTYPE html>
<html lang="en">
    <?php
	    include("cabecalho.inc");
    ?>
    <body>
      <header> 
        <nav class="navbar navbar-light" style="background-color: #000000;">
            <div>
                <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">BROOKS</a>
                </div>
            </div>
            <ul class="nav">
              <li class="nav-item">
                <a href="cadastro.php" class="btn btn-outline-warning">Cadastre-se</a>
              </li>
              <li class="nav-item">
                <a href="cardapio.html" class="btn btn-outline-warning">Cárdapio</a>
            </li>
            </ul>
        </nav>
      </header>
      <section id="sliderhome">
            <div id="meuSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="brooks/slides/14.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/15.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/19.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/22.png" class="img-fluid d-block" alt="...">
                  </div>
                </div>
            </div>
        </section>
        <div class="form-center">
            <div class="form">
              <h3>Logar</h3>
              <form action="" method="POST">
                <p>
                  <label>E-mail</label>
                  <input type="text" name="email" required/>
                </p>
                <p></p>
                  <label>Senha</label>
                  <input type="password" name="senha" required/>
                </P>
                <p>
                  <!-- <input type="submit" value="Entrar"/> -->
                  <center><a href="delivery.php" class="botlog">Entrar</a></center></br>
                  <center>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></center>
                  <center><a href="listausuarios.php">Admin.</a></center>
                </p>
              </form>
            </div>
          </div>   
          
        <footer>
            <div id="contact-area">
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <p><span class="contact-tile">Ligue para:</span> (16)99999-9999</p>
                      <p><span class="contact-tile">Horários:</span> 18:00 - 00:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                      <i class="fa fa-envelope" aria-hidden="true" aria-hidden="true"></i>
                      <p><span class="contact-tile">Envie um email:</span> contato@brooks.com.br</p>
                    </div>
                    <div class="col-md-4 contact-box">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <p><span class="contact-tile">Venha pessoalmente:</span> Rua Alberto Benassi, Santa Angelina - 1314</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                      <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                      <form action="">
                        <input type="text" class="form-control" placeholder="E-mail" name="email">
                        <input type="text" class="form-control" placeholder="Assunto" name="subject">
                        <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                        <input type="submit" class="btn btn-outline-warning">
                      </form>
                    </div>
                  </div>
              </div>
            </div>
            <div id="copy-area">
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <p>Desenvolvido por <a href="" target="_blank">Sabrina Zanella e Vinícius Maiores</a> &copy; 2021</p>
                    </div>
                </div>
              </div>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>