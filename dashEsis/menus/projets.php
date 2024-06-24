<?php require '../includes/header.php'; ?>

<div class="container " >
    <div class="row border m-4">
        <div class="col-md-12 col-sm-12 border border-secondary ">
                <div class="modal-header d-flex flex-direction-row p-0  justify-content-between ">
                    <h1 class="h3 mb-3 fw-normal">Projets</h1>
                    <a type="button" href="projets_challenges.php" class="border " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" >
                            <i class="bi bi-x"> retour</i>
                        </span>
                    </a>
                </div>
        </div>
        <!-------Liste des jaunes----------->
        <div class="col-md-4 col-sm-12 border g-0 border">
            <div class="w-100 border mb-4 d-flex justify-content-center  shadow">
                <h2 class="text-warning"><span class="text-dark">@</span>Jaune</h2>
                <h4 class="text-dark"><?=$res['num'] ?? 10?><span class="fs-6 text-secondary">projets</span></h4>
            </div>

            <div class="row  rounded-4 mb-4  border m-2">
                <div class="col col-lg-3 bg-light">
                    <div class="card rounded-circle mt-2" width="10" height="10">
                        <img src="../assets/images/profile.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="" width="10" height="10">
                        <a href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col card col-lg-9 bg-light shadow rounded-4 p-2">
                    <h1 class="fs-6 fw-bold">Mutamba joseph <i class="bi bi-star-fill text-warning"></i></h1>
                    <h2 class="fs-6 text-warning m-0">@Jaune</h2>
                    <p class=" fw-normal m-0">Application Web</p>
                </div>
            </div>
                    <!-------fin premier membre----------->
            <div class="row  rounded-4 mb-4  border m-2">
                <div class="col col-lg-3 bg-light">
                    <div class="card rounded-circle mt-2" width="10" height="10">
                        <img src="../assets/images/customer-support.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="" width="10" height="10">
                        <a href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col card col-lg-9 bg-light shadow rounded-4 p-2">
                    <h1 class="fs-6 fw-bold"> 5 personnes</h1>
                    <h2 class="fs-6 text-warning m-0">@Jaune</h2>
                    <p class=" fw-normal m-0">Système d'exploitation</p>
                </div>
            </div>

        </div>
        <!-------fin des jaunes----------->


        <!-------Liste des Bleus----------->
        <div class="col-md-4 col-sm-12 border g-0">
            <div class="w-100 border mb-4 d-flex justify-content-center  shadow">
                <h2 class="text-primary"><span class="text-dark">@</span>Bleu</h2>
                <h4 class="text-dark"><?=$res['num'] ?? 15?><span class="fs-6 text-secondary">projets</span></h4>
            </div>

            <div class="row  rounded-4 mb-4  border m-2">
                <div class="col col-lg-3 bg-light">
                    <div class="card rounded-circle mt-2" width="10" height="10">
                        <img src="../assets/images/profile.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="" width="10" height="10">
                        <a href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col card col-lg-9 bg-light shadow rounded-4 p-2">
                    <h1 class="fs-6 fw-bold">Mutamba medard <i class="bi bi-star-fill text-warning"></i></h1>
                    <h2 class="fs-6 text-primary m-0">@Bleu</h2>
                    <p class=" fw-normal m-0">boubelle IA</p>
                </div>
            </div>
        </div>
        <!-------fin des Bleus----------->


        <!-------Liste des verts----------->
        <div class="col-md-4 col-sm-12 border g-0 ">
             <div class="w-100 border mb-4 d-flex justify-content-center border-bottom shadow">
                <h2 class="text-success"><span class="text-dark">@</span>Vert</h2>
                <h4 class="text-dark"><?=$res['num'] ?? 10?><span class="fs-6 text-secondary">projets</span></h4>
            </div>

            <div class="row  rounded-4 mb-4  border m-2">
                <div class="col col-lg-3 bg-light">
                    <div class="card rounded-circle mt-2" width="10" height="10">
                        <img src="../assets/images/profile.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="" width="10" height="10">
                        <a href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col card col-lg-9 bg-light shadow rounded-4 p-2">
                    <h1 class="fs-6 fw-bold">Mutamba medard <i class="bi bi-star-fill text-warning"></i></h1>
                    <h2 class="fs-6 text-success m-0">@Bleu</h2>
                    <p class=" fw-normal m-0">boubelle IA</p>
                </div>
            </div>
            <!-------fin membres 1----------->

            <div class="row  rounded-4 mb-4  border m-2">
                <div class="col col-lg-3 bg-light">
                    <div class="card rounded-circle mt-2" width="10" height="10">
                        <img src="../assets/images/profile.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="" width="10" height="10">
                        <a href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col card col-lg-9 bg-light shadow rounded-4 p-2">
                    <h1 class="fs-6 fw-bold">Mutombo mwambi</h1>
                    <h2 class="fs-6 text-success m-0">@Vert</h2>
                    <p class=" fw-normal m-0">3D animation</p>
                </div>
            </div>
        </div>
        <!-------Fin des Verts----------->
    </div>
</div>

<?php require '../includes/footer.php'; ?>