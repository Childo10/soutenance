<?php
    $title="Mot de passe oublié - Directeur des études";
    include('./app/Commun/header.php');
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-8 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    </div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié ?</h1>
                                <p class="mb-4">Nous comprenons, des choses arrivent. Entrez simplement votre adresse e-mail ci-dessous et nous vous
                                 enverrons un lien pour réinitialiser votre mot de passe!</p>
                            </div>
                            <form action="traitement"   class="user">
                                <div class="form-group">
                                    <label for="email">Entrer votre adresse email</label>
                                    <input type="email"  name="email" class="form-control"
                                        id="email" aria-describedby="emailHelp">
                                </div>

                                 <div class="form-group row">
                                <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                <input type="submit" value="Récupérer" class="mb-1 mb-md-0  btn btn-primary">

                                
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<?php
    include('./app/Commun/dashbord_footer.php');;
?>