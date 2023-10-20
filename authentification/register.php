<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././bootstrap/css/bootstrap.min.css">
    <title>Register - Page</title>
</head>

<body class="bg-dark">
    <?php
    // include("../navigation/navbar.php");
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="row my-4">
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <img src="../icon/font.png" width="100" height="80" alt="">
                                    </div>
                                </div>

                                <h3 class="text-white text-center">Creation de votre compte</h3>
                            </div>
                        </div>
                        <form action="controller.php" method="post">
                           
                            <div class="form-group mt-3">
                                <input type="text" name="nom" class="form-control" placeholder="Nom" require>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom" require>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" require>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" require>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" require>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirmer le mot de passe" require>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">

                                    <input type="hidden" name="action" value="register ">
                                    <input type="submit" value="S'inscrire" class="btn btn-success w-100">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p class="text-white text-xs text-center">Vous avez deja compte ? <span class=""><a href="login.php">Se connecter</a></span></p>
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