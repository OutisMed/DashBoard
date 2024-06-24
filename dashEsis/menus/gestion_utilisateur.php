<?php require '../includes/header.php'; ?>

<!-------Gestion Utilisateurs----------->

<div class="main-content">
            <div class="row">

                <div class="col-md-12">
                    <div class="table-wrapper">

                        <div class="table-title bg-light">
                            <div class="row">
                                <div class=" text-dark  col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h1 class="text-secondary fw-normal">Gestions ds Utilisateurs</h1>
                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                    <a href="#addEmployeeModal" class="btn btn-dark" data-toggle="modal" title="Ajouter utilisateur">
                                        Ajouter un Utilisateur
                                    </a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-hover ">
                            <thead class="bg-secondary text-light">
                                <tr>
                                    <th scope="col" class="fw-bolder" >#</th>
                                    <th scope="col" class="fw-bolder" >Nom</th>
                                    <th scope="col" class="fw-bolder" >Post-Nom</th>
                                    <th scope="col" class="fw-bolder" >Prénom</th>
                                    <th scope="col" class="fw-bolder" >E-mail</th>
                                    <th scope="col" class="fw-bolder" >Mot de passe</th>
                                    <th scope="col" class="fw-bolder" >Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mutombo</td>
                                    <td>Mutamba</td>
                                    <td>dieudonné</td>
                                    <td>medardkik01@gmail.com</td>
                                    <td>2algo43746273DJHEJFEJDHEJDEHDHED3723</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit " data-toggle="modal">
                                            <i class="material-icons " data-toggle="tooltip" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                            </i>
                                        </a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Effacer">
                                            <i class="bi bi-trash"></i>
                                            </i>
                                        </a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <!----Ajouter-modal start--------->
                <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex flex-direction-row justify-content-between">
                                <h5 class="modal-title ">Ajouter un Utilisateur</h5>
                                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img src="../assets/images/svg/x.svg" alt="" width="15">
                                    </span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Post-Nom</label>
                                    <input type="text" class="form-control" name="postNom" required>
                                </div>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!----edit-modal end--------->

                <!----edit-modal start--------->
                <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex flex-direction-row justify-content-between">
                                <h5 class="modal-title ">Modifier un utilisateur</h5>
                                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img src="../assets/images/svg/x.svg" alt="" width="15">
                                    </span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="name" required>
                               </div>
                               <div class="form-group">
                                    <label>Post-Nom</label>
                                    <input type="text" class="form-control" name="postNom" required>
                               </div>
                               <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom" required>
                               </div>
                               <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                               </div>
                               <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="password" required>
                               </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!----edit-modal end--------->

                <!----delete-modal start--------->
                <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex flex-direction-row justify-content-between">
                                <h5 class="modal-title ">Eaffacer un utilisateur</h5>
                                <button type="button" class="border " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img src="../assets/images/svg/x.svg" alt="" width="15">
                                    </span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Voulez-vous vraiment supprimmer cet enregistrement ?</p>
                                <p class="text-warning"><small>Cette action ne peut pas être annulée,</small></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!----edit-modal end--------->

            </div>
            <!------end ROW----------->
        </div>




<?php require '../includes/footer.php'; ?>