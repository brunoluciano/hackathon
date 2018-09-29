<?php

    $email = $_POST["v_email"];
    $senha = $_POST["v_senha"];
  if ($email == "fun@gmail.com" && $senha == "fun2469"){
    header("location: login.php");
  }
else{
    ?>
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <br><br><br>
        <label>Senha/Email errados </label>
    <br>
        <input type="button" name="retornar"
                            class="btn btn-danger btn-lg" value="Voltar"
                                   onclick="javascript:location.href= 'login.php'">
    </body>
    </html>
    <?php
}
 
?>