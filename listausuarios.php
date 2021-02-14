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
                  <a class="navbar-brand text-white" href="#">BROOKS - ADMIN</a>
                </div>
            </div>
            <ul class="nav">
              <!-- <li class="nav-item">
                <a href="cardapio.html" class="btn btn-outline-warning">Cárdapio</a>
              </li>
  
              <li class="nav-item">
                <a href="cadastro.php" class="btn btn-outline-warning">Cadastre-se</a>
              </li> -->
			  <li class="nav-item">
                <a href="index.php" class="btn btn-outline-warning">Sair</a>
              </li>
            </ul>
        </nav>
      </header>
      <!-- <section id="sliderhome">
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
        </section> -->
		<?php

			include ('cabecalho_conexão.php');
			
			$SQL = "SELECT * FROM usuario" ;
			
			// Executa o comando SQL
			$dados_recuperados = mysqli_query ($con, $SQL);

			if ( mysqli_num_rows ($dados_recuperados) > 0){
				echo '</br><table class="table">
						<tr class="bg-warning">
							<th scope="col"> Id </th>
							<th scope="col"> Nome </th>
							<th scope="col"> Telefone </th>
							<th scope="col"> Operações </th>
						</tr>';
				while (($resultado = mysqli_fetch_array ($dados_recuperados)) != null){
			
					echo  '
							<tr>
								<td> ' . $resultado [ 0 ]. '</td>
								<td> ' . $resultado [ 1 ]. '</td>
								<td> ' . $resultado [ 2 ]. '</td>
								<td> <a href="remover_usuario.php?id='.$resultado [0].'"> Remover </a> </td>
							</tr>
						';
				}	
				echo  '</table>';	
			}
			
			
			mysqli_close ($con);
			
		?>
	</body>
</html>