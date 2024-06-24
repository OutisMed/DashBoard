<?php if(isset($_SESSION['auth']) || !empty($_SESSION['auth'])): ?> 
	<div class="dropdown text-end mx-2 ">
		<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
			<!--<img src="../assets/imgs/<?php /* $_SESSION['user']->profil; */ ?>" alt="mdo" width="32" height="32" class="rounded-circle">-->
			<img src="../assets/images/profile.jpg" alt=""width="32" height="32" class="rounded-circle">
		</a>
		<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
			<li><a class="dropdown-item" href="#">nouvelle publication</a></li>
			<li><a class="dropdown-item" href="../setting_user/parametre.php">Parametre</a></li>
			<li><a class="dropdown-item" href="#">Profile</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="../connexions/logout.php">Se déconnecter</a></li>
		</ul>
	</div>
	<li><a href="../actions/usersAdmin/logOut.php" class="btn btn-outline-light me-2">se déconnecter</a></li>
<?php else: ?>
	<a href="../connexions/login.php" class="btn btn-light">se connecter</a>
<?php endif; ?>