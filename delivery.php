<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="brooks/logo.png">
        <title>Brooks Hamburgueria</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="form.css"/>
        <script src="js/arquivo.js"></script>
    </head>
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
                <a href="index.php" class="btn btn-outline-warning">Sair</a>
              </li>
            </ul>
        </nav>
      </header>
      <section id="sliderhome">
        <div id="meuSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="brooks/slides/22.png" class="img-fluid d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="brooks/slides/15.png" class="img-fluid d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="brooks/slides/19.png" class="img-fluid d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="brooks/slides/14.png" class="img-fluid d-block" alt="...">
              </div>
            </div>
        </div>
      </section>
      </br>
      </br>
      <center>
        <h3> Peça já seu brooks burguer! </h3>
      </center>

      <div class="card" style="width: 60rem; left: 300px; top: 40px;">
        <div class="card-body">
          <table>
            <tr>
              <td> 
                <img src="brooks/hamburgues/7.png" width="100px">
              </td>
              <td style="width:700px"> 
                <h5 class="card-title">Onion Burguer</h5>
                <h6>R$30,00</h6>
                <p class="card-text">Blend de 180g de carne angus, muçarela, molho barbecue da casa e anéis de cebola empanada.</p>
              </td>
              <td>
                <input type="number" name="numero" id="num" min="0" max="3">
                <a href="#" class="btn btn-outline-warning">Quero!</a>
              </td>
            </tr>
          </table>
        </div>
      </div> </br>

      <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/hamburgues/8.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Chicken Burguer</h5>
                  <h6>R$30,00</h6>
                  <p class="card-text">Burger de 150g de frango, muçarela, bacon crocante, tomate cereja e alface americana.</p>
                </td>
                <td>
                <input type="number" name="numero" id="num" min="0" max="3">
                <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/hamburgues/9.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Fondue Burguer</h5>
                  <h6>R$30,00</h6>
                  <p class="card-text">Blend de 180g de carne angus no pão furado, bacon, molho de queijo tipo fondue e batata canoa.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/hamburgues/10.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Clássico</h5>
                  <h6>R$30,00</h6>
                  <p class="card-text">Blend de 180g de carne angus, queijo prato, bacon crocante, tomate cereja e alface americana.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/hamburgues/11.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Catupiry Burguer</h5>
                  <h6>R$30,00</h6>
                  <p class="card-text">Blend de 180g de carne angus, catupiry original, bacon crocante e alho crocante.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/hamburgues/8.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Sausage Burguer</h5>
                  <h6>R$30,00</h6>
                  <p class="card-text">Burguer de linguiça especial 150g, queijo prato e vinagrete no pão francês redondo.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>
        </br>
        </br>
        <center>
          <h3> Vai uma porçãozinha aí? </h3>
        </center>
        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/porcoes/13.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Anéis de Cebola</h5>
                  <h6>R$40,00</h6>
                  <p class="card-text">Anéis crocantissímos, acompanha molho barbecue da casa (400g).</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/porcoes/14.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Frango Empanado</h5>
                  <h6>R$40,00</h6>
                  <p class="card-text">Cortado em tiras, acompanha molho especial da casa (400g).</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/porcoes/15.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Iscas de Peixe</h5>
                  <h6>R$40,00</h6>
                  <p class="card-text">Cortado em tiras, acompanha molho especial da casa (400g).</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>
        </br>
        </br>
        <center>
          <h3> A bebida não pode faltar, aproveite! </h3>
        </center>
        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/bebidas/16.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Cerveja Artesanal</h5>
                  <h6>R$10,00</h6>
                  <p class="card-text">Cerveja original da casa.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/bebidas/17.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Pink Lemonade</h5>
                  <h6>R$10,00</h6>
                  <p class="card-text">Pink Lemonade original da casa.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br>

        <div class="card" style="width: 60rem; left: 300px; top: 40px;">
          <div class="card-body">
            <table>
              <tr>
                <td> 
                  <img src="brooks/bebidas/18.png" width="100px">
                </td>
                <td style="width:700px"> 
                  <h5 class="card-title">Lemonade Tradicional</h5>
                  <h6>R$10,00</h6>
                  <p class="card-text">Lemonade original da casa.</p>
                </td>
                <td>
                  <input type="number" name="numero" id="num" min="0" max="3">
                  <a href="#" class="btn btn-outline-warning">Quero!</a>
                </td>
              </tr>
            </table>
          </div> 
        </div> </br> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <?php
	    include("rodape.inc");
    ?>