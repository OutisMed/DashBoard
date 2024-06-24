
<?php require '../actions/questions/getInfoEditedCategorieAction.php' ?>
<?php require '../actions/questions/editCategorieAction.php' ?>

<?php require '../includes/header.php'; ?>

<div class=" alert alert-light  p-2">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header p-2 d-flex flex-direction-row p-0 shadow  justify-content-between align-items-center  mb-2 border">
                    <h1 class="h4 mb-3 fw-normal ">Modifier  Ou Message</h1>
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


<div class="cotainer">
<?php if(isset($errormsg)){echo '<pre>'. $errormsg.'</pre>';}?>

<?php if(isset($question_date)){ ?>

    <!-------Créer un articles----------->
    <div class=" bg-light p-5" >
        <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                <h1 class="h3 mb-3 fw-normal">Modifier  une information ou signaler le propriétaire</h1>
            </div>
            <div class="row">
                <div class="my-2 col-lg-3 border p-2">
                    <label class="d-block mb-3">
                        <img class="mx-auto d-block image-preview-edit" src="../assets/images/profile.jpg" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                        <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                    </label>
                    <div class="card d-flex text-center p-1">
                        <p class="text-secondary" style="font-size: 9px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Dolores eos, corporis dolor consectetur sunt veniam corrupti
                             quas similique ea. Animi tempora accusamus minima, fuga incidunt 
                             consectetur laborum debitis dolores quia?</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control w-75" name="titre"  placeholder="Titre de la question" value="<?= $question_titre; ?>">
                        <label >Titre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-contro" rows="2" cols="54" name="description" id="" placeholder="Description">
                        <?= $question_description; ?>
                        </textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="" rows="4" cols="54" name="content" id="" placeholder="Votre Contenu">
                        <?= $question_contenu; ?>
                        </textarea>
                        
                    </div>
                    <!--<textarea id="summernote" rows="8" name="content" id="floatingInput" placeholder="votre contenu" type="content" class="form-control shadow"></textarea>-->
                </div>

                <div class="form-floating my-3  col-lg-3 border p-2 bg-light shadow">
                    <select name="categorie" class="form-select mb-4" value="<?= $question_categorie; ?>">
                        <option value="0">--Select--</option>
                        <option value="Offre de d'emploi">Offre de d'emploi</option>
                        <option value="Stage">Stage</option>   
                    </select>
                    <label for="floatingInput">Categories</label>

                </div>
            </div>
            <a href="forum_Discussion.php">
                <button class="mt-4 btn btn-sm btn-dark" type="button">Retour</button>
            </a>
            <button class="mt-4 btn btn-sm btn-dark float-end" type="submit" name="valide">Créer</button>
        </form>
        </div>
    </div>
    
<?php } ?>

</div>
<?php require '../includes/footer.php'; ?> 