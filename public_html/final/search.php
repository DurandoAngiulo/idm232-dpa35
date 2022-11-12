<?php
include_once __DIR__ . '/app.php';
$page_title = 'Search';
include_once __DIR__ . '/_components/header.php';
?>
    <div class="cardBackground p-5">
            <h4>Search Results For</h4>
            <?php include_once '_components/search-bar.php'; ?>
    </div>        
    <div class="container-fluid">
        <div class="container p-0  mt-5">
            <div class="row  d-flex justify-content-center">
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>       
            </div>
        </div>
    </div>
    <div class="footer mt-4">
    <p class="text-center">Durando Angiulo 2022</p>
    </div>
    <?php include_once __DIR__ . '/_components/footer.php';
?>