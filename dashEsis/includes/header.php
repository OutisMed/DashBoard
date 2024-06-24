<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/fonts/bootstrap-icons.css">
	    <!----css3---->
        <link rel="stylesheet" href="../assets/css/custom.css">

		 <!--summernote-->
	  <link rel="stylesheet" type="text/css" href="../assets/css/summernote/summernote-lite.min.css">

  </head>
  <body>

  <?php require '../actions/usersAdmin/securityActions.php' ?>

<div class="wrapper">
	<div class="body-overlay"></div>
	 <!-------sidebar--design------------>
	<div id="sidebar" class="border">
		<div class="sidebar-header">
			<div class="sidebar-header mb-3 border w-100 d-flex align-items-center justify-content-center" style="height:70px;">
				<!--<h1><i class="bi bi-speedometer text-light"> </i></h1>-->
				<h2 class="text-dark mx-1 fw-normal" > DashBoard</h2>
			</div>
		</div>
		<ul class="list-unstyled component m-0">
			<li class="">
		  		<a href="../menus/index.php" class="dashboard"><i class="bi bi-speedometer"> Stat.</i> </a>

		  	</li>

		  	<li class="dropdown">
				<a href="../menus/gestion_utilisateur.php" class="sidebar-link">
				<i class="bi bi-person-circle"> Utilisateurs</i>
				</a>
		  	</li>
			<li class="dropdown">
				<a href="../menus/projets_challenges.php" class="sidebar-link">
				<i class="bi bi-file-earmark-binary"> Projets & Challenges</i>
				</a>
		  	</li>
			<li class="dropdown">
				<a href="../forums/forum_Discussion.php" class="sidebar-link">
				<i class="bi bi-file-earmark-binary">f</i>
				</a>
		  	</li>

			<li class="dropdown">
			   	<a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
			   		<i class="bi bi-newspaper"> Ressources</i>
			   	</a>
			   	<ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     		<li><a href="../menus/categories.php"><i class="bi bi-tags"> Catégories</i></a></li>
			 		<li><a href="../menus/articles.php"><i class="bi bi-file-post"> Articles</i></a></li>
			 		<li><a href="../menus/forums_discussion.php"><i class="bi bi-send"> Forums & Discutions</i></a></li>
			   	</ul>
		   	</li>

		</ul>
	</div>
</div>

   <!-------sidebar--design- close----------->

    <!-------page-content start----------->

 	<div id="content">
		<!------top-navbar-start----------->
		<div class="top-navbar shadow">
		    <div class="xd-topbar">
			    <div class="row">

				    <div class="col-2 col-md-1 col-lg-1 order-1 order-md-1 align-self-center">
					    <div class="xp-menubar bg-light">
							<img src="../assets/images/svg/left.svg" alt="" width="15">
						</div>
					</div>

					<div class="col-md-3 col-lg-4 order-2 order-md-2">
						<h3>Administrateur</h3>
					</div>
					<div class="col-md-2 col-lg-7 order-3">
						
						 <!-- php <a class="nav-link px-3 text-light" href="#">Sign out</a> -->
						 <div class=" mx-2 d-flex justify-content-end">
							<div><h3 class="mx-2 fw-normal fs-5 text-light">@ <?= $_SESSION['pseudo']; ?></h3></div>
							
							<a href="#" class="d-block link-dark text-decoration-none " data-bs-toggle="dropdown" aria-expanded="false">
								<!--<img src="../assets/imgs/<?php /* $_SESSION['user']->profil; */ ?>" alt="mdo" width="32" height="32" class="rounded-circle">-->
								<img src="../assets/images/profile.jpg" alt=""width="50" height="50" class="rounded-circle">
							</a>
							<div class="mx-4">
							<a class="btn btn-outline-light btn-sm" href="../actions/usersAdmin/logOut.php">Se déconnecter</a>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!------top-navbar-end----------->
