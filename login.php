<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Página Login</title>
</head>
<body ondragstart='return false'>
    <div class="container-fluid">
        <div class="row barra">
            <div class="col-md-12">
                <h1 class="text-center">Vitae Social</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-7">
                <img class="bg_fundo" src="Banner Inicio.png" alt="">						
            </div>
    
            <div class="col-md-5">
                <ul class="list-group">
                    <li class="list-group-item active"><h3>Login</h3></li>
                    <li class="list-group-item"><form action="autenticar.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="v_email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="v_senha" required>
                        </div>
                        <button type="submit" class="btn btn-info btn-lg btn-block">Entrar</button>
                        <hr>
                        <p class="text-center"><a href="cadastroUser.php">Criar conta</a> ou <a href="#">lembrar senha</a></p>
                    </form></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>