<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div id="menu">
    <ul>
		<li><a href="index.php"><button type="button" class="btn btn-secondary">Início</button></a></li>
		<li><a href="aula_cookie.php"><button type="button" class="btn btn-secondary">Cookie</button></a></li>
		<li><a href="produtos.php"><button type="button" class="btn btn-secondary">Produtos</button></a></li>
		<li><a href="meuCarrinho.php"><button type="button" class="btn btn-secondary">Carrinho de Compras</button></a></li>
	
    <li>
    <?php
        if( session_status() != PHP_SESSION_ACTIVE ){
            session_start();
        }

        if(  isset( $_SESSION['logado']) && $_SESSION['logado']  ){
            echo '<a href="categorias.php"><button type="button" class="btn btn-secondary">Categorias</button></a>';

            echo "Olá ". $_SESSION['nome_usuario']; 
            echo ' <a href="deslogar.php"><button type="button" class="btn btn-secondary">Sair</button></a> ';
        }else{
            echo ' <a href="login.php"><button type="button" class="btn btn-secondary">Login</button></a> ';
        }

    ?>
</li>
</ul>
    
</div>