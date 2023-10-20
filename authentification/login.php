<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././bootstrap/css/bootstrap.min.css">
    <title>Login - Page</title>
</head>
<body class="bg-dark">
    <?php
    //   include("../navigation/navbar.php");
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="row my-4">
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                    <img src="../icon/font.png" width="100" height="80" alt="">
                                    </div>
                                </div>
                            
                                <h3 class="text-white text-center">Connexion à votre compte</h3>
                            </div>
                        </div>
                        <form action="controller.php" method="post">
                            <div class="form-group">
                                <input type="text" name="matricule" class="form-control" placeholder="Matricule" require>
                            </div>
                            <div class="form-group mt-4">
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" require>
                            </div>
                           
                             <div class="row mt-3">
                                <div class="col-md-12">
                                <p class="text-white text-xs">mot de passe oublier ?</p>
                                    <input type="hidden" name="action" value="login">
                                  <input type="submit" value="Se connecter" class="btn btn-success w-100">
                                </div>
                             </div>
                             <div class="row mt-3">
                                <div class="col-md-12">
                                    <p class="text-white text-xs text-center">Vous n'avez pas de compte ? <span class=""><a href="#">s'inscription</a></span></p>
                                </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>