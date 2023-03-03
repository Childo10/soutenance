<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connexion - Directeur des études</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Lien vers css -->
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

        <div class="card o-hidden border-0 col-lg-6 col-md-8 col-10 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Entrer votre email...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="mdp" class="form-control"
                                        id="exampleInputPassword" placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Se souvenir de moi
                                            </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Connexion" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </div>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="mdp_oublie_DE.php">Mot de passe oublié ?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="inscription_DE.php">Créez un compte!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

</div>

<?php
    include('dashbord_footer_DE.php');
?>