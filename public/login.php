<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mvp";

    // Criando a conexão
    /*$con = mysqli_connect($servername, $username, $password, $database) or die ("Erro de conexão");

        if(isset($_POST['submit'])){
            $x = $_POST['x'];
            //$mensagem = $_POST['mensagem'];
            $query = mysqli_query($con, "INSERT INTO contact (x) VALUES ('$x','$x')");
        }
    //}
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - MVP</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <link rel="shortcut icon" href="#" type="image/png">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
  </head>
  <body>
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('components/menu.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->
    <div class="long-spacing "></div>
    <main>
        <div class="container-fluid">
            <div class="container">
                <h2 class="text-center" id="title">Entrar </h2>
                 <p class="text-center">
                    <small id="passwordHelpInline" class="text-muted"> ...</small>
                </p>
                 <hr class="mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                              <form role="form">
                            <fieldset>				                                     
                                <div class="form-group">
                                    <input type="email" name="username" id="username" class="form-control input-lg" placeholder="Nome de usuário">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha">
                                    <a href="register.php"><small>Ainda não tem uma conta?</small></a>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-lg btn-primary mb-5 mt-4"   value="Entrar">
                                </div>
                                     
                             </fieldset>
                    </form>	
                    </div>
                </div>
            </div>
        </div>
    </main>
  
    <!-- Espaçador -->
    <div class="long-spacing"></div>
    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>