<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<?php
// get data from database
$query ='SELECT * FROM recipes ORDER BY RAND() LIMIT 5';
// $query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>
 <div class="px-5">
        <div class="row px-3">
            <div class="col-sm-12 col-md-7">
                    <img class= "rounded-1 img-fluid" src=https://via.placeholder.com/800x500 alt="game"/>
            </div>
            <div class="col-sm-12 col-md-5">
                <h1 class='mt-2 ps-2'>Trending <span class="fst-italic red">Now</span></h1>
                <?php include '_components/sidebar.php'; ?>
                <?php include '_components/sidebar.php'; ?>
                <?php include '_components/sidebar.php'; ?>
                <?php include '_components/sidebar.php'; ?>
                <?php include '_components/sidebar.php'; ?>
            </div>
        </div>
        <!-- d-flex flex-wrap justify-content-around justify-content-lg-between m-0 -->
        <div class="p-lg-0 mt-3 mx-0">  
            <div class="row w-100 d-flex justify-content-center justify-content-md-start justify-content-xl-between m-0">
            <div class="col-12 mt-3"><h1 class='mt-2'>Popular <span class="fst-italic red">Recipes</span></h1></div>
             <?php include __DIR__ . '/_components/recipeCards.php'; ?>
            </div>
        </div>
        <div class="p-0 mt-5 mx-0">  
            <div class="row w-100 d-flex justify-content-center justify-content-md-start justify-content-xl-between m-0">
                <div class="col-12 mt-3"><h1 class='mt-2'>New <span class="fst-italic red">Recipes</span></h1></div>
                <?php include __DIR__ . '/_components/recipeCards.php'; ?>
            </div>
        </div>
        <div class="p-0 mt-5 mx-0">  
            <div class="row w-100 d-flex justify-content-center justify-content-md-start justify-content-xl-between m-0">
                <div class="col-12 mt-3"><h1 class='mt-2 w-75'>Popular <span class="fst-italic red">Recipes</span></h1></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
            </div>
        </div>
     </div>
        
<?php include_once __DIR__ . '/_components/footer.php';
?>