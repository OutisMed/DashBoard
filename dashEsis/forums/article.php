
<?php require '../includes/header.php'; ?>
<?php require '../actions/questions/showArticleContentAction.php';?>
<?php require '../actions/questions/postAnswersAction.php';?>
<?php require '../actions/questions/showAllAnswersQuestionAction.php';?>


<br>

<div class="container border">    
<?php if(!empty($errormsg)){ ?>
        <div class="card p-2 mx-3 mb-2 alert alert-danger">
            <pre class="text-dark text-center fs-4"><?= $errormsg; ?></pre>
        </div>
    <?php }elseif(isset($succesmsg)){ ?>
        <div class="card p-2 mx-3 mb-2 alert alert-success">
            <pre class="text-dark  text-center fs-4"><?= $succesmsg; ?></pre>
        </div>
    <?php  }?> 
    
    
    <?php if(isset($question_categorie)){  ?> 
        <h4 class="text-uppercase">Information sur  <b><?= $question_categorie;?></b></h4><br>
        <section class="container">
            <div class="alert alert-secondary " >
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-6">
                        <a href="modifier_categorie.php?id=<?= $question['id']; ?>"><i class=" mx-1 text-primary">Modifier</i></a>
                        <a href="../actions/questions/deleteCategorieAction.php?id=<?= $question['id']; ?>"><i class=" mx-1 text-danger">Supprimer</i></a>
                    </div>
                    <div class="col-lg-6 col-md-6 text-end">
                        <small class="fw-normal fs-6 text-success"><?= $question_categorie;?></small>
                    </div>
                </div>

            </div>
            <div class="card card-body mb-2">
                <small class="fw-normal fs-5 text-secondary">Titre | <a class="fw-bold"><?= $question_titre;?></a></small>
                <hr class="mt-0">
                <small class="fw-normal fs-5 text-secondary">Déscription | <a class="fw-bold"><?= $question_description;?></a></small>
            </div>
            <div class="card card-body">
                <small class="fw-normal fs-5 text-secondary">Contenu | <a class="fs-6"><?= $question_contenu;?></a></small>  
            </div>
            
            <div class="card card-footer">
                <div class="row">
                    <div class="col">
                        <small class="text-secondary opacity-75">Publier par  <b class="text-dark"><?= $question_pseudo_author;?></b></small>
                        <?php if(isset($_SESSION['role']) == 'Admin'){ ?>
                            <?= '( '.$_SESSION['role'].' )';?>
                        <?php }else{ ?>
                            <?= $_SESSION['role']= 'User';?>
                        <?php  }?> 
                    </div>
                    <div class="col text-end">
                        
                    </div>
                    <div class="col text-end">
                    <small class="text-secondary opacity-75"><?=$question_date;?></small>
                    </div>
                </div>
                
            </div>

        
        </section>
        <br>
        <h4 class="text-uppercase">Votre commataire</h4>
            <form action="" class="form-group" method="post">
                <textarea name="answer" id="" cols="5" rows="5" class="form-control border border-success" placeholder="Votre commataire"></textarea>
                <br>
                <button type="submit" class="btn btn-success" name="valide">Repondre</button>
            </form>
            <br>
            <h4 class="text-uppercase">commataires</h4>
            <hr class="border border-dark">

                <?php while($answer = $getAllAnswerThisQuestion->fetch()){ ?> 
                    <section class="container">
                        <div class="card row w-75">
                            <div class="card-header p-1 px-3 g-0">
                                <div class="row">
                                    <div class="col-md-2 border shadow"><small>@ <?= $answer['pseudo_auteur']; ?></small> </div>
                                    <div class="col-md-10"></div>
                                </div>
                                                    
                            </div>
                            <div class="card-body">
                                <small><?= $answer['contenu']; ?> </small>
                                
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col text-end"><?= $answer['date_reponse']; ?> </div>
                                </div>
                            
                            </div>
                        </div>
                    </section>
                    <br>

                <?php } ?> 
                
    <?php } ?> 

</div>
<?php require '../includes/footer.php'; ?>