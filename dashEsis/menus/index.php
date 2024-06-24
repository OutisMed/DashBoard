<?php require '../includes/header.php'; ?>
<!-------Gestion des Ressources----------->
<div class="container mt-4 mb-5">
    <h4>Statistiques</h4>
    <div class="row justify-content-center ">

        <div class="m-1 col-md-4 bg-light rounded shadow border text-center p-2">
            <h1><i class="bi bi-person-video3"></i></h1>
            <div>Administrateurs</div>
                <!-------du PHP ici----------->
            <h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
        </div>
        
        <div class="m-1 col-md-4 bg-light rounded shadow border text-center p-2">
            <h1><i class="bi bi-person-circle"></i></h1>
            <div>Utilisateurs</div>
            <!-------du PHP ici----------->
            <h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
        </div>

        <div class="m-1 col-md-4 bg-light rounded shadow border text-center p-2">
            <h1><i class="bi bi-tags"></i></h1>
            <div>Categories</div>
            <!-------du PHP ici----------->
            <h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
        </div>

        <div class="m-1 col-md-4 bg-light rounded shadow border text-center p-2">
            <h1><i class="bi bi-file-post"></i></h1>
            <div>Postes</div>
            <?php 
                /*
                $query = "select count(id) as num from posts";
                $res = query_row($query);
                */
            ?>
            <h1 class="text-primary"><?=$res['num'] ?? 0?></h1>
        </div>

    </div>
</div>


<?php require '../includes/footer.php'; ?>