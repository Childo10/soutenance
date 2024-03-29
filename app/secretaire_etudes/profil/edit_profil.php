<?php
if(!isset($_SESSION['users_SE']) && empty($_SESSION['users_SE'])){
    header('location:'.CHEMIN_PROJET.'secretaire_etudes/connexion/index');
}
$title = 'Paramètres du profil(Secretaire des études)';
include('./app/Commun/dashbord_siedbar_SE.php');
if (isset($_SESSION['users_SE']['id_utilisateur']) and !empty($_SESSION['users_SE']['id_utilisateur'])) {
}

?>





<div class="container">

	<div class="main-body">
		<div class="col-lg-8 offset-md-2 offset-0">

			<form class="card" method="post" action="<?= CHEMIN_PROJET ?>secretaire_Etudes/profil/edit_profil_traitement">

				<div class="card-header  bg-primary text-white">
					<h5 class="card-title text-center">
						Modifier mes informations personnelles
					</h5>
				</div>
				<?php
				if (isset($_SESSION['message_global']) && !empty($_SESSION['message_global'])) {
				?>
					<div class="alert-message">
						<?= $_SESSION['message_global'] ?>
					</div>
					<style>
						.alert-message {
							position: fixed;
							z-index: 10;
							top: 30px;
							left: 60%;
							transform: translateX(-50%);
							padding: 10px 30px;
							background-color: red;
							color: white;
							font-size: 16px;
							border-radius: 5px;
							opacity: 1;
							transition: opacity 0.4s ease-in-out;
						}



						.hide {
							opacity: 0;
						}
					</style>
				<?php
				}
				?>

				<div class="card-body">
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Nom</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="nom" class="form-control <?= isset($_SESSION['errors']['nom']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['users_SE']['nom'] ?>">
							<?php
							if (isset($_SESSION['errors']['nom'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['nom'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Prenom</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="prenom" class="form-control <?= isset($_SESSION['errors']['prenom']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['users_SE']['prenom'] ?>">
							<?php
							if (isset($_SESSION['errors']['prenom'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['prenom'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="nom_utilisateur" class="form-control <?= isset($_SESSION['errors']['nom_utilisateur']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['users_SE']['nom_utilisateur'] ?>">
							<?php
							if (isset($_SESSION['errors']['nom_utilisateur'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['nom_utilisateur'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<label for="sexe" class="form-label mb-0 font-weight-bold">Sexe</label>
						</div>
						<div class="col-sm-9 text-secondary">

							<select name="sexe" id="sexe" class="form-control">
								<option value="Masculin ">Masculin</option>
								<option value="Féminin ">Féminin</option>
								<option value="Autre">Autre</option>
							</select>

							<?php
							if (isset($_SESSION['errors']['sexe'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['sexe'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Date de naissance</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="date" name="date_naissance" class="form-control <?= isset($_SESSION['errors']['date_naissance']) ? 'is-invalid' : '' ?>"  value="<?= !empty($_SESSION['users_SE']['date_naissance']) ? $_SESSION['users_SE']['date_naissance'] : ''?>">
							<?php
							if (isset($_SESSION['errors']['date_naissance'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['date_naissance'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Adresse</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="adresse" class="form-control <?= isset($_SESSION['errors']['adresse']) ? 'is-invalid' : '' ?>" value="<?= !empty($_SESSION['users_SE']['adresse']) ? $_SESSION['users_SE']['adresse'] : ''?>">
							<?php
							if (isset($_SESSION['errors']['adresse'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['adresse'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Téléphone</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="number" name="telephone" class="form-control <?= isset($_SESSION['errors']['telephone']) ? 'is-invalid' : '' ?>" value="<?= !empty($_SESSION['users_SE']['telephone']) ? $_SESSION['users_SE']['telephone'] : ''?>">
							<?php
							if (isset($_SESSION['errors']['telephone'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['telephone'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>



					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0 font-weight-bold">Entrer votre mot de passe</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="password" name="mot_de_passe" class="form-control <?= isset($_SESSION['err_mdp']) ? 'is-invalid' : '' ?> <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : '' ?>">
							<?php
							if (isset($_SESSION['errors']['mot_de_passe'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['errors']['mot_de_passe'] ?>
								</div>
							<?php
							}
							?>

							<?php
							if (isset($_SESSION['err_mdp'])) {
							?>
								<div class="invalid-feedback">
									<?= $_SESSION['err_mdp'] ?>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6 text-secondary">
							<input type="submit" class="btn btn-sm btn-primary px-2" name="button" value="Appliquer">
							<input type="reset" class="btn btn-sm btn-danger px-2" name="button" value="Annuler">
						</div>
					</div>
				</div>
			</form>


		</div>
	</div>
</div>
</div>



<?php
unset($_SESSION['errors']);
unset($_SESSION['err_mdp']);
unset($_SESSION['message_global']);
include('./app/Commun/dashbord_footer.php');
?>