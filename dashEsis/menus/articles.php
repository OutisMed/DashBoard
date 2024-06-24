<?php require '../includes/header.php'; ?>
<!------- Articles----------->


<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title bg-light">
                    <div class="row">
                        <div class=" text-dark  col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h1 class=" text-secondary fw-normal">Tous les articles</h1>
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
                        <th>Titre</th>
                        <th>liens</th>
                        <th>Images</th>
                        <th>Date</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                        <tr>
                            <td>1</td>
                            <td>violence</td>
                            <td>violence</td>
                            <td>
                                <img src=""  style="width: 50px;height: 50px;object-fit: cover;">
                            </td>
                            <td>12/03/2023</td>
                            <td>Jaune</td>
                            <td>
                                <a href="#editarticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-pencil"></i></button>
                                </a>
                                <a href="#deletearticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>violence</td>
                            <td>violence</td>
                            <td>
                                <img src=""  style="width: 50px;height: 50px;object-fit: cover;">
                            </td>
                            <td>12/03/2023</td>
                            <td>Vert</td>
                            <td>
                                <a href="#editarticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-pencil"></i></button>
                                </a>
                                <a href="#deletearticle" class="edit" data-toggle="modal">
                                    <button class="btn  btn-sm"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>

                        </tr>
                </table>
            </div>
        </div>


    <!-------Créer un articles----------->
    <div class=" modal fade bg-light p-5"  tabindex="-1" id="addarticle">
        <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                <h1 class="h3 mb-3 fw-normal">Ajouter un Poste</h1>
                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x"></i></span>
                </button>
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
                        <label for="floatingInput">La date</label>
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

    <!-------Supprimer un article----------->
    <div class="modal fade" tabindex="-1" id="deletearticle" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content container p-2">
        <form method="post">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between ">
                    <h1 class="h3 mb-3 fw-normal">Delete post</h1>
                    <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bi bi-x"></i>
                        </span>
                    </button>
            </div>
            
            <div class="modal-body">
                    <p>Voulez-vous vraiment supprimmer cet enregistrement ?</p>
                    <p class="text-warning"><small>Cette action ne peut pas être annulée,</small></p>
            </div>
             <a href="">
                    <button class="mt-4 btn btn-sm btn-dark" type="button">Retour</button>
                </a>
                <button class="mt-4 btn btn-sm btn-danger  float-end" type="submit">Effacer</button>
        </form>
    </div>
    </div>
    </div>

    <!-------Modifier un article----------->
    <div class="modal  bg-light p-5"   id="editarticle">
        <form method="post" enctype="multipart/form-data">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between  mb-4">
                <h1 class="h3 mb-3 fw-normal">Modifier le Poste</h1>
                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x"></i></span>
                </button>
            </div>
            <div class="row">
                <div class="my-2 col-lg-3 border p-2 shadow">
                    <label class="d-block">
                        <img class="mx-auto d-block image-preview-edit" src="../assets/images/profile.jpg" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                        <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                    </label>
                </div>

                <div class="col-lg-6">
                    <div class="form-floating mb-2 shadow">
                    <input value="" name="title" type="text" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                    <label for="floatingInput">Votre Titre ici</label>
                    </div>
                    <textarea id="editor" rows="8" name="content" id="floatingInput" placeholder="votre contenu" type="content" class="form-control"></textarea>
                </div>

                <div class="form-floating my-3  col-lg-3 border p-2 shadow ">
                    <select name="category_id" class="form-select mb-4">
                        <option value="">--Select--</option>
                        <option value="">Jaune</option>
                        <option value="">Bleu</option>
                        <option value="">Vert</option>    
                    </select>
                    <label for="floatingInput">Categories</label>
                    <div class="form-floating mb-2">
                        <input value="" name="date" type="date" class="form-control mb-2" id="floatingInput" placeholder="Votre Titre ici">
                        <label for="floatingInput">La date</label>
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
</div>


<?php require '../includes/footer.php'; ?>