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
<body>
    <div class="container-fluid">
        <div class="row barra">
            <div class="col-md-12">
                <h1 class="text-center">JOSÉ</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-7">
                <p>WELCOME TO OSSN DEMO! JOIN NOW TO MAKE NEW FRIENDS, CREATE GROUPS, ADD PHOTOS, AND MUCH MORE.</p>	
                <div class="row">
                    <div class="col-md-3"><i class="fas fa-users"></i></div>
                    <div class="col-md-3"><i class="fas fa-comments"></i></div>
                    <div class="col-md-3"><i class="fas fa-envelope"></i></div>
                    <div class="col-md-3"><i class="fas fa-globe"></i></div>
                </div>	
                <div class="row">
                    <div class="col-md-3"><i class="far fa-images"></i></div>
                    <div class="col-md-3"><i class="fas fa-video"></i></div>
                    <div class="col-md-3"><i class="fas fa-map-marker"></i></div>
                    <div class="col-md-3"><i class="fas fa-calendar"></i></div>
                </div>						
            </div>
    
            <div class="col-md-5">
                <h3>Cadasto de Usuário</h3>
                <form action="autenticar.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sobrenome" aria-describedby="emailHelp" placeholder="Sobrenome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="v_email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nUsuario" aria-describedby="emailHelp" placeholder="Nome do Usuário" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="v_senha" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmar senha" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Data de Nascimento" required>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Feminino</label>
                    </div><br><br>
                    <button type="submit" class="btn btn-info btn-lg btn-block">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>