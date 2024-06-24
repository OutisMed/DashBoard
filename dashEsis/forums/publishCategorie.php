<?php require '../includes/header.php'; ?>
<?php require '../actions/questions/publishCategorieAction.php' ?>
<br>
    <?php if(!empty($errormsg)){ ?>
        <div class="card p-2 mx-3 mb-2 alert alert-danger">
            <pre class="text-dark fw-3"><?= $errormsg; ?></pre>
        </div>
    <?php }elseif(isset($succesmsg)){ ?>
        <div class="card p-2 mx-3 mb-2 alert alert-success">
            <pre class="text-dark fw-3"><?= $succesmsg; ?></pre>
        </div>
    <?php  }?> 
    
    <!-------Créer un articles----------->
    <div class=" bg-light p-5"  tabindex="-1" id="addarticle">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                    <h1 class="h3 mb-3 fw-normal">Publier une information</h1>
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
                            <input type="text" class="form-control w-75" name="titre"  placeholder="Titre de la question">
                            <label >Titre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-contro" rows="2" cols="54" name="description" id="" placeholder="Description"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="" rows="4" cols="54" name="content" id="" placeholder="Votre Contenu"></textarea>
                            
                        </div>
                        <!--<textarea id="summernote" rows="8" name="content" id="floatingInput" placeholder="votre contenu" type="content" class="form-control shadow"></textarea>-->
                    </div>

                    <div class="form-floating my-3  col-lg-3 border p-2 bg-light shadow">
                        <select name="categorie" class="form-select mb-4">
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














                
                
<?php require '../includes/footer.php'; ?>