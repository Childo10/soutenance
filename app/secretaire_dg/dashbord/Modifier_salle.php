<?php 
if(!isset($_SESSION['users_SDG']) && empty($_SESSION['users_SDG'])){
    header('location:'.CHEMIN_PROJET.'secretaire_dg/connexion/');
}
    $title='Modifier une salle';
    include('./app/Commun/dashbord_siedbar_SDG.php');
?>


<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier une salle</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control " name="numsal" id="numsal"
                                    placeholder="005">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control " name="capacite" id="capacite"
                                    placeholder="150">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control" name="Typesal" id="Typesal"
                                    placeholder="Informatique">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control "
                                    id="nbmax" name="nbmax" placeholder="100 ">
                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" name="Nb_defectueux" class="form-control"  id="Nb_defectueux"
                                    placeholder="20">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" name="Nb_dispo" class="form-control"  id="Nb_dispo"
                                    placeholder="150">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                            <input type="submit" value="Enregistrer" class="mb-1 mb-md-0  btn btn-primary">
                            </input>

                                <input type="reset"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="Liste_salle">Liste des salles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
    include('./app/Commun/dashbord_footer.php');
?>