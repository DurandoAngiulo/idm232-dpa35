<?php include_once 'components/header.php'; ?>
 <?php include_once 'components/navbar.php'?>
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
        <div class="row  d-flex justify-content-center">
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div>
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div>
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div>
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div>
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div> 
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div> 
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div> 
            <div class="col-auto mt-3"><?php include 'components/recipeCard.php'; ?></div>       
        </div>
    
    </div>
    </div>
    <div class="footer mt-4">
<?php include_once 'components/footer.php'; ?>