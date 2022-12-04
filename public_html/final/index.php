<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<?php
// get data from database
$query ='SELECT * FROM recipes ORDER BY RAND() LIMIT 5';
$querySidebar ='SELECT * FROM recipes ORDER BY RAND() LIMIT 5';
$queryBanner ='SELECT * FROM recipes ORDER BY RAND() LIMIT 1';
// $query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);
$resultSidebar = mysqli_query($db_connection, $querySidebar);
$resultBanner = mysqli_query($db_connection, $queryBanner);

?>
 <div class="px-5">
        <div class="row px-3">
            <?php include __DIR__ . '/_components/bannerImage.php'; ?>
                    
            <div class="col-sm-12 col-md-5">
                <h1 class='mt-2 ps-2'>Trending <span class="fst-italic red">Now</span></h1>
                <?php include '_components/sidebars.php'; ?>
            </div>
        </div>
        <!-- d-flex flex-wrap justify-content-around justify-content-lg-between m-0 -->
        <div class="p-lg-0 mt-3 mx-0 ">  
            <div class="row w-100 d-flex justify-content-center justify-content-md-start justify-content-xl-between m-0">
            <div class="col-12 mt-3"><h1 class='mt-2'>New <span class="fst-italic red">Recipes</span></h1></div>
             <?php include __DIR__ . '/_components/recipeCards.php'; ?>
            </div>
        </div>
     </div>
        
<?php include_once __DIR__ . '/_components/footer.php';
?>