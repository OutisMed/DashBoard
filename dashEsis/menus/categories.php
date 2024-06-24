<?php require '../includes/header.php'; ?>
<!-------Gestion des Categories----------->

<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title bg-light">
                    <div class="row">
                        <div class=" text-dark  col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h1 class=" text-secondary fw-normal">Catégories</h1>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addCategorie" class="btn btn-lg btn-dark" data-toggle="modal" title="Ajouter une Catégorie">
                                        Ajouter
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped ">
                    <tr>
                        <th>#</th>
                        <th>Categorie</th>
                        <th>Slug</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jaune</td>
                        <td>jaune</td>
                        <td>Oui</td>
                        <td>
                            <a href="#editCategorie" class="edit" data-toggle="modal">
                                <i class="material-icons " data-toggle="tooltip" title="Modifier">
                                    <i class="bi bi-pencil"></i>
                                </i>
                            </a>
                            <a href="#deleteCategorie" class="delete" data-toggle="modal">
                                <i class="material-icons " data-toggle="tooltip" title="Supprimer">
                                    <i class="bi bi-trash"></i>
                                </i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Bleu</td>
                        <td>Bleu</td>
                        <td>Non</td>
                        <td>
                            <a href="#editCategorie" class="edit" data-toggle="modal">
                                <i class="material-icons " data-toggle="tooltip" title="Modifier">
                                    <i class="bi bi-pencil"></i>
                                </i>
                            </a>
                            <a href="#deleteCategorie" class="delete" data-toggle="modal">
                                <i class="material-icons " data-toggle="tooltip" title="Supprimer">
                                    <i class="bi bi-trash"></i>
                                </i>
                            </a>
                        </td>
                    </tr>
       
                </table>
            </div>
        </div>


    <!-------Créer une catégories----------->
    <div class=" modal fade " tabindex="-1"  id="addCategorie" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content container p-2">
                <form method="post" enctype="multipart/form-data">
                <div class="modal-header d-flex flex-direction-row p-0  justify-content-between">
                    <h5 class="modal-title ">Créer une Catégorie</h5>
                    <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bi bi-x"></i>
                        </span>
                    </button>
                </div>
                    <div class="form-floating mt-4">
                        <input value="" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="Category">
                        <label for="floatingInput">Nom Catégorie</label>
                    </div>

                    <div class="form-floating my-3">
                        <select name="disabled" class="form-select">
                            <option value="0">Oui</option>
                            <option value="1">Non</option>
                        </select>
                        <label for="floatingInput">Activée</label>
                    </div>

                    <a href="">
                        <button class="mt-4 btn btn-sm btn-dark" type="button">Retour</button>
                    </a>
                    <button class="mt-4 btn btn-sm btn-dark float-end" type="submit">Créer</button>
                </form>
            </div>
        </div>
    </div>

    <!-------Supprimer une catégorie----------->
    <div class="modal fade" tabindex="-1" id="deleteCategorie" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content container p-2">

        <form method="post">
            <div class="modal-header d-flex flex-direction-row p-0  justify-content-between">
                <h1 class="h3 mb-3 fw-normal">Effacer une Catégorie</h1>
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

    <!-------Modifier une catégorie----------->
    <div class="modal fade" tabindex="-1" id="editCategorie" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content container p-2">
        <form method="post" enctype="multipart/form-data">
        <div class="modal-header d-flex flex-direction-row p-0  justify-content-between">
                <h1 class="h3 mb-3 fw-normal">Modifier Catégorie</h1>
                    <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bi bi-x"></i>
                        </span>
                    </button>
            </div>
            
                <div class="form-floating mt-4">
                    <input value="" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Nom Catégorie</label>
                </div>
                <div class="text-danger"></div>
                <div class="form-floating my-3">
                    <select name="disabled" class="form-select">
                        <option  value="0">Oui</option>
                        <option  value="1">Non</option>
                    </select>
                    <label for="floatingInput">Activeé</label>
                </div>
                <a href="">
                    <button class="mt-4 btn btn-sm btn-dark" type="button">Back</button>
                </a>
                <button class="mt-4 btn btn-sm btn-dark  float-end" type="submit">Save</button>
        </form>
    </div>
    </div>
    </div>


    </div>
</div>

<?php require '../includes/footer.php'; ?>