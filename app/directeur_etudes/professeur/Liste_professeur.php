<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
$title='Liste des inscriptions';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des professeurs</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Ajout_professeur" type="button" class="btn btn-primary" >Ajouter un professeur</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro professeur</th>
                        <th>Nom professeur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro professeur</th>
                        <th>Nom professeur</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>Clément Gbodja</td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001544</td>
                            <td>Clément Gbodja</td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur" type="button" class="btn-sm btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>Clément Gbodja</td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>Clément Gbodja</td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php 
    include('./app/Commun/dashbord_footer.php');
?>