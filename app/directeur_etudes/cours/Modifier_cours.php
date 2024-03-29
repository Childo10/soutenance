<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
    $title='Modifier un emploi du temps';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>


<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier un cours</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control " name="numcours" id="numcours"
                                    placeholder="0005">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control " name="codemat" id="codemat"
                                    placeholder="00015">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control" name="numprof" id="numprof"
                                    placeholder="00015">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control "
                                    id="codefil" name="codefil" placeholder="0000154">
                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="jour" class="form-control"  id="jour"
                                    placeholder="Mardi">
                            </div>
                            <div class="col-sm-6">
                                <input type="time" name="Heure_deb" class="form-control"
                                    id="Heure_deb" placeholder="17:00">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 ">
                                <input type="time" name="Heure_fin" class="form-control"
                                    id="Heure_fin" placeholder="19:00">
                            </div>

                            <div class="col-sm-6 ">
                                <input type="number" name="numsal" class="form-control"
                                    id="numsal" placeholder="005">
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
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/cours/Liste_cours">Liste des cours</a>
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