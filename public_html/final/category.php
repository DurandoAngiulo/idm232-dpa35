<?php
include_once __DIR__ . '/app.php';
$page_title = 'Categories';
include_once __DIR__ . '/_components/header.php';
?>
    <div class="container-fluid d-flex p-0">
        <img src="https://via.placeholder.com/500x150" class="w-100">
    </div>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h1 class="text-center fst-italic">Explore our <span class="red">Recipes</span></h1>
            </div>
        </div>    
        <div class="row mt-1">
            <div class="col">
                <h4 class="text-center fw-light fst-italic grey" >Recipe excerpt/description</h4>
            </div>  
        </div>
        <div class="custom-border redBackground"></div>
        <div class="container p-0  mt-5">
            <div class="row  d-flex justify-content-between">
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