<?php 
if(!isset($_SESSION['users_SE']) && empty($_SESSION['users_SE'])){
    header('location:'.CHEMIN_PROJET.'secretaire_etudes/connexion/index');
}
    $title="Modifier le déroulerement d'un cours";
    include('./app/Commun/dashbord_siedbar_SE.php');
?>


<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier le déroulement d'un cours</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control " name="numcours" id="numcours"
                                    placeholder="00154">
                            </div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control " name="Date_cours" id="Date_cours"
                                    placeholder="10/05">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="time" class="form-control" name="Hrdeb" id="Hrdeb"
                                    placeholder="15:00">
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="Hrfin" id="Hrfin"
                                    placeholder="17:00">
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
                        <a class="small" href="Liste_derou_cours">Liste du déroulement des cours</a>
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