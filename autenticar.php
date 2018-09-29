<?php

    $email = $_POST["v_email"];
    $senha = $_POST["v_senha"];
  if ($email == "fun@gmail.com" && $senha == "fun2469"){
    header("location: perfil.html");
  }
else{
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Erro Login</title>
    </head>
    <body>
        <div class="container">
            <br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border-danger">
                        <div class="card-body text-danger">
                            <h5 class="card-title">Email ou Senha incorretos!</h5>
                            <p class="card-text">Informe dados válidos!</p>
                            <div class="card-footer bg-transparent border-danger"><button type="button" class="btn btn-secondary" onclick="javascript: location.href='login.php'">Voltar</button></div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>   

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
    <?php
}

?>