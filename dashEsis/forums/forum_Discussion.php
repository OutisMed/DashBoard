
<?php require '../actions/questions/showAllQuestionAction.php';?>

<?php require '../includes/header.php'; ?>
<!-------Forums et Discussions---------->

<div class="  bg-light p-2"  tabindex="-1" id="addarticle">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header p-2 d-flex flex-direction-row p-0 shadow  justify-content-between align-items-center  mb-2 border">
                <h1 class="h4 mb-3 fw-normal ">Forums & Discutions</h1>
                <a type="button" class="d-flex flex-direction-row " data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-bell d-flex  mx-4" aria-hidden="true">
                        <p class="bg-danger rounded-circle " style=" width: 10px; height:10px;"></p>
                    </i>
                    <i class="bi bi-send d-flex" aria-hidden="true" href="#editarticle" class="edit" data-toggle="modal">
                        <p class="bg-danger rounded-circle " style=" width: 10px; height:10px;"></p>
                    </i>
                </a>
            </div>
        </form>
    </div>
</div>



<div class="row container-fluid">
        <div class="table-wrapper">
            <div class="table-title bg-light border shadow">
                <div class="row">
                    <div class=" text-dark  col-sm-8 p-0 flex  justify-content-center ">

                        <form action="" method="get">
                            <div class="form-group row g-0">
                                <div class="col-10 g-0">
                                    <input type="search" name="search" class="form-control border border-secondary bg-light" placeholder="Entrez un titre">
                                </div>
                                <div class="col-2 g-0 d-flex">
                                    <button type="submit" class="btn btn-success  m-1">Recherche</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-4 p-0 flex justify-content-lg-end justify-content-center ">
                        <a href="publishCategorie.php" class="btn btn-lg btn-dark"  title="Ajouter un article">Ajouter</a>
                    </div>
                </div>
            </div>
            <br>
            
            <?php while($question = $getAllQuestions->fetch()){ ?>
                <div class="container">
                    <div class="card shadow">
                        <div class="card-heade p-0 mb-0 px-2 alert alert-secondary ">
                            <div class="row ">
                                <div class="col-8 d-flex flex-column ">
                                    <small class="text-secondary opacity-75" style="font-size: 11px;">Titre :</small>
                                    <a class="fw-bold text-primary" href="article.php?id=<?= $question['id']; ?>" style="font-size: 12px;"><?= $question['titre']; ?></a>
                                </div>
                                <div class="col-4 d-flex justify-content-end px-3">
                                    <a href="modifier_categorie.php?id=<?= $question['id']; ?>"><i class="bi bi-pencil mx-3"></i></a>
                                    <a href="../actions/questions/deleteCategorieAction.php?id=<?= $question['id']; ?>"><i class="bi bi-trash mx-3 text-danger"></i></a>
                                    <a href="article.php?id=<?= $question['id']; ?>"><i class="bi bi-eye mx-3 text-success"></i></a>
                                </div>
                            </div>    
                        </div>
                        <div class="card-body g-0 p-0 px-2">
                            <div class="row g-0">
                                <div class="col d-flex flex-column ">
                                    <small class="text-secondary opacity-75" style="font-size: 11px;">Description :</small>
                                    <p class="fw-normal m-0" style="font-size: 12px;"><?= $question['description']; ?></p>
                                </div>
                            </div>      
                        </div>
                        <div class="card-footer p-0 px-4">
                            <div class="row">
                                <div class="col g-0 d-flex flex-column p-0">
                                    <small class="text-secondary opacity-75">Publier par <b><?= $question['pseudo_auteur']; ?></b>  </small>
                                    <small class="text-secondary opacity-75">Catégorie <b class="text-primary"><?= $question['categorie']; ?></b></small>
                                </div>
                                <div class="col d-flex justify-content-end px-3">
                                    <small class="text-secondary opacity-75">Le <?= $question['date_publication']; ?></small>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>  
            <?php require '../includes/footer.php'; ?>
        </div>
        
</div>



