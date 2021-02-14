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
                <a href="index.php" class="btn btn-outline-warning">Login</a>
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
                    <img src="brooks/slides/19.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/14.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/15.png" class="img-fluid d-block" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="brooks/slides/22.png" class="img-fluid d-block" alt="...">
                  </div>
                </div>
            </div>
        </section>

        <div class="form-center">
            <div class="form">
              <h3>Cadastre-se</h3>
              <form action="insere.php" method="POST">
                <p>
                  <label>Nome</label>
                  <input type="text" name="nome" placeholder="Nome" required/>
                </p>
                <p>
                  <label>Telefone</label>
                  <input type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required/>
                </p>
                <p>
                  <label>E-mail</label>
                  <input type="text" name="email" placeholder="E-mail" required/>
                </p>
                <P>
                  <label>Senha</label>
                  <input type="password" name="senha" required/>
                </P>
                <p>
                  <input type="submit" value="Cadastrar"/>
                  <center>Já tem cadastro? <a href="index.php">Faça login.</a></center>
                  <center><a href="listausuarios.php">Admin.</a></center>
                </p>
              </form>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <?php
	    include("rodape.inc");
    ?>
    