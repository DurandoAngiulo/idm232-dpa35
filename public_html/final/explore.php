<?php
include_once __DIR__ . '/app.php';
$page_title = 'Explore';
include_once __DIR__ . '/_components/header.php';
?>
<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY title';
$result = mysqli_query($db_connection, $query);

?>
    <div class="container-fluid d-flex p-0">
        <img src="https://res.cloudinary.com/dsysuymw2/image/upload/v1669935957/232/banner_yy5bdc.jpg" class="w-100">
    </div>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h1 class="text-center fst-italic">Explore our <span class="red">Recipes</span></h1>
            </div>
        </div>    
    </div>
        <div class="d-flex justify-content-center">
            <div class="custom-border redBackground w-75"></div>
        </div>
        <div class="p-lg-0 mt-3 mx-0 d-flex justify-content-center">  
            <div class="row w-100 d-flex justify-content-center justify-content-md-start  m-0">
             <?php include __DIR__ . '/_components/recipeCards.php'; ?>
            </div>
        </div>
    <?php include_once __DIR__ . '/_components/footer.php';
?>