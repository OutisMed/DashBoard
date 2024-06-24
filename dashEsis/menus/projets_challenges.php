<?php require '../includes/header.php'; ?>
<!------- Articles----------->


<div class="main-content">
    <div class="container">
        <div class="row">
            <a class=" col-md-6 btn btn-light rounded shadow border text-center p-2" href="projets.php">
                <h1><i class="bi bi-file-earmark-code"></i></h1>
                <div>Projets</div>
                    <!-------du PHP ici----------->
                <h1 class="text-primary"><?=$res['num'] ?? 35?></h1>	
            </a>

            <a class=" col-md-6 rounded shadow border text-center p-2 btn btn-light" href="#addarticle">
                <h1><i class="bi bi-code-slash"></i></h1>
                <div>Challenges</div>
                    <!-------du PHP ici----------->
                <h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title bg-light">
                    <div class="row">
                        <div class=" text-dark  col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h1 class=" text-secondary fw-normal">Projets & Challenges</h1>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addarticle" class="btn btn-lg btn-dark" data-toggle="modal" title="Ajouter un article">
                                        Ajouter
                            </a>
                        </div>
                    </div>
                </div>
                <!-------Tables----------->
                <table class="table table-striped">
        
                    <tr>
                        <th>#</th>
                        <th>Nom & post-Nom</th>
                        <th>lien gitHub</th>
                        <th>Catégorie</th>
                        <th>titre</th>
                        <th>date début</th>
                        <th>date fin</th>
                        <th>acceptable</th>
                        <th>Action</th>
                    </tr>
                        <tr>
                            <td>1</td>
                            <td>Bilos Neville</td>
                            <td>application mobile</td>
                            <td class="text-warning">Jaune</td>
                            <td>Projet</td>
                            <td>12/03/2023</td>
                            <td>12/03/2024</td>
                            <td>Non</td>
                            <td>
                                <a href="#editarticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-eye"></i></button>
                                </a>
                            </td>

                        </tr>

                        <tr>
                        <td>1</td>
                            <td>Médard Ruthafar</td>
                            <td>application web</td>
                            <td class="text-success">vert</td>
                            <td>Projet</td>
                            <td>12/03/2023</td>
                            <td>12/03/2024</td>
                            <td>Oui</td>
                            <td>
                                <a href="#editarticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-eye"></i></button>
                                </a>
                            </td>

                        </tr>
                </table>
            </div>
        </div>


    <!-------Créer un Projet ou challenges----------->
    <div class=" modal fade bg-light p-5"  tabindex="-1" id="addarticle">
        <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                <h1 class="h3 mb-3 fw-normal"> un Projet ou challenges  ---</h1>
                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x"></i></span>
                </button>
            </div>
            <div class="row">
                <div class="my-2 col-lg-3 border p-2">
                        <div class="form-floating my-3  border p-2 bg-light shadow">
                            <select name="category_id" class="form-select mb-4">
                                <option value="">--Select--</option>
                                <option value="">Projet</option>
                                <option value="">Challenge</option>   
                            </select>
                            <label for="floatingInput">Projet ou challenge</label>
                        </div>
                        
                    <div class="card d-flex text-center p-1">
                    <label class="d-block">
                        <h3>Votre image</h3>
                        <img class="mx-auto d-block image-preview-edit" src="../assets/images/profile.jpg" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                        <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                    </label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-floating mb-2 shadow">
                    <input value="" name="title" type="text" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                    <label for="floatingInput">Votre Titre ici</label>
                    </div>
                    <textarea id="summernote" rows="8" name="content" id="floatingInput" placeholder="votre contenu" type="content" class="form-control shadow"></textarea>
                </div>

                <div class="form-floating my-3  col-lg-3 border p-2 bg-light shadow">
                    <select name="category_id" class="form-select mb-4">
                        <option value="">--Select--</option>
                        <option value="">Jaune</option>
                        <option value="">Bleu</option>
                        <option value="">Vert</option>    
                    </select>
                    <label for="floatingInput">Categories</label>

                    <div class="form-floating mb-2">
                        <input value="" name="date" type="date" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                        <label for="floatingInput">date début</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input value="" name="date" type="date" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                        <label for="floatingInput">date fin</label>
                    </div>
                </div>
            </div>
            <a href="">
                <button class="mt-4 btn btn-sm btn-dark" type="button">Retour</button>
            </a>
            <button class="mt-4 btn btn-sm btn-dark float-end" type="submit">Créer</button>
        </form>
        </div>
    </div>

   

    <!-------Modifier un article-- --------->
    <div class="modal bg-light p-5"   id="editarticle">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                <h1 class="h3 mb-3 fw-normal">Voir projet ou challenge</h1>
                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x"></i></span>
                </button>
            </div>
            <div class="row">
                <div class="my-2 col-lg-5 border p-2 shadow">
                    <div>
                        <h3>Resultat</h3>
                    </div>
                    <div class="d-block">
                        <h6 class="text-dark opacity-50"><i class="bi bi-1-circle"></i>. Nom : <b>Mutamba </b></h6>
                        <h6 class="text-dark opacity-50"><i class="bi bi-2-circle"></i>. post-Nom : <b>Ruthafar</b></h6>
                        <h6 class="text-dark opacity-50"><i class="bi bi-3-circle"></i>. Catégorie : <b class="text-warning">@Jaune</b></h6>
                        <hr>
                        <h6 class="text-dark opacity-50"><i class="bi bi-4-circle"></i>. Sujet : <b>Conjugaison verbe pleuvoir</b></h6>
                        <hr>
                        <h6 class="text-dark opacity-50 g-0 mb-0"><i class="bi bi-5-circle"></i>. Déscription</h6>
                        <p class="card fs-6 opacity-75 mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Voluptate dolore blanditiis recusandae dolor aspernatur.
                        </p>
                        <h6 class="text-dark fw-bolder g-0 mb-0"><i class="bi bi-send">message</i></h6>
                        <p class="card fs-6 opacity-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Voluptate dolore blanditiis recusandae dolor aspernatur.
                        </p>
                        <hr>
                        <h6 class="text-dark opacity-50 g-0 mb-0"><i class="bi bi-6-circle"></i>. lien <a href="" class="text-primary"><i class="bi bi-github">Conjugaison Verbe Pleuvoir</i></a></h6>
                        <hr>
                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-floating mb-2 shadow p-2 mt-2">
                        <hr>
                        <h6 class="text-dark opacity-50"><i class="bi bi-7-circle"></i>. Date début : <b>12/03/2023</b></h6> 
                        <hr>
                        <h6 class="text-dark opacity-50"><i class="bi bi-8-circle"></i>. Date Fin : <b>12/03/2024</b></h6>  
                        <hr>
                        <h6 class="text-dark opacity-50"><i class="bi bi-9-circle"></i>. acceptable: <b>Non</b></h6>
                        <hr>
                   
                    </div> 
                    <!-------Message----------->
                    <textarea id="projet" rows="8" name="content" id="floatingInput" placeholder="votre contenu" type="content" class="form-control"></textarea>
                </div>

                <div class="form-floating my-3  col-lg-3 border p-2 shadow ">
                    <div class="form-floating mb-2">
                        <input value="" name="date" type="number" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                        <label for="floatingInput">Pourcentage %</label>
                    </div>
                </div>
            </div>
            <a href="">
                <button class="mt-4 btn btn-sm btn-dark" type="button">Retour</button>
            </a>
            <button class="mt-4 btn btn-sm btn-dark float-end" type="submit">Envoyer</button>
        </form>
    </div>

</div>
</div>


<?php require '../includes/footer.php'; ?>