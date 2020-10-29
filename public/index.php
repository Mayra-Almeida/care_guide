<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projeto - MVP</title>
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
    <!-- Inicio do Espaçador -->
    <div class="medium-spacing"></div>
    <!-- Fim do Espaçador -->
    <!-- Inicio do Conteúdo principal -->
    <main class="container-fluid">
      <div class="container">
      <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                        <div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
                            <div>
                                <h1 class="card-title pt-3 mb-5 font-bold"><strong>MVP</strong></h1>
                                <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                    laboriosam, voluptatem, optio vero odio nam sit officia accusamus
                                    minus error nisi architecto nulla ipsum dignissimos. Odit sed qui,
                                    dolorum!.</p>
                                <a class="btn btn-outline-white"><i class="fa fa-clone left"></i> View project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>

      <!-- Inicio do Espaçador -->
        <div class="medium-spacing"></div>
      <!-- Fim do Espaçador -->

      <!-- Inicio dos Cards-Teams -->
        <?php include('components/team-card.html'); ?>
      <!-- Fim dos Cards-Teams -->
    </main>
    <!-- Fim do Conteúdo principal -->
    <!-- Inicio do Espaçador -->
    <div class="medium-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>