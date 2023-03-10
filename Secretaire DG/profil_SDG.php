<?php 
    $title="Profil de la sécrétaire du DG";
    include('dashbord_siedbar_SDG.php');
?>


<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashbord_SDG.php">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil de l'utilisateur</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="font-weight-bold">Ariane Dossou</h4>
                      <p class="text-secondary mb-1">Sécrétaire du  directeur générale</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nom complet</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Ariane Dossou
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Ariane10
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    arianedoss@.gmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Type de profil</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Sécrétaire du directeur générale
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="edit_profil_SDG.php">Editer</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>


<?php 
    include('dashbord_footer_SDG.php');
?>
