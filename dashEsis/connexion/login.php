<!DOCTYPE html>
<html lang="en">
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
</head>

<?php require '../actions/usersAdmin/loginAction.php';?>
<body>
<br><br><br><br><br><br>
<form class="container text-center  " method="post">
    <?php if(!empty($errormsg)){ ?>
        <div class="card p-2 mx-3 mb-2 alert alert-danger">
            <pre class="text-dark fw-3"><?= $errormsg; ?></pre>
        </div>

    <?php  }?> 
    
    <div class="row">

      <div class="col col-md-12 col-lg-7">
              <div class="card h-100">
                    <h3>Connectez-vous </h3>
                    <div class="card p-3 mx-3 mb-3">
                      comme Administrateur
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint ut, accusantium qui facilis assumenda obcaecati corrupti reprehenderit voluptatibus eum consequatur quis rem magni dicta dolor, ullam eligendi ad aut fugit!</p>
                    </div>
                    <div>
                      <h1><i class="bi bi-door-open " style="font-size: 60px;"></i></h1>
                    </div>
              </div>
      </div>
      <div class="col col-sm-12  col-lg-5">
        <h2 class="fw-normal">Connexion</h2>
        <div class="form-floating mb-3">
          <input type="text" class="form-control w-100 border border-success" name="pseudo"  placeholder="pseudo">
          <label >Pseudo</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control w-100 border border-success" name="pass" placeholder="Password">
          <label >password</label>
        </div>

        <button class="w-50 btn btn-lg btn-primary" type="submit" name="valide">Connexion</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
      </div>
    </div>
</form>
    
</body>
</html>