<?php
include_once __DIR__ . '/app.php';

// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

$page_title = $recipe['title'];
include_once __DIR__ . '/_components/header.php';
?>

 <div class="container-fluid px-5">
    <div class="container-fluid px-4 mt-5 d-flex justify-content-center">
       <img src="<?php echo $recipe['imageUrl'] ?>" class="recipeImage rounded-2 redBorder">
    </div>   
       <div class="row mt-3">
            <div class="col">
                <h1 class="red text-center" ><?php echo $recipe['title']?></h1>
            </div>
       </div>  
       <div>
        <h4 class="text-center fst-italic fw-light"><?php echo $recipe['recipeDescription']?></h4>
       </div>  
    <div class="button-flex">
        <div class="custom-button"><p class="fw-semibold">Prep Time: <span class= "fw-light"><?php echo $recipe['prepTime']?></span></p></div>
        <div class="custom-button"><p class="fw-semibold">Cook Time: <span class= "fw-light"><?php echo $recipe['cookTime']?></span></p></div>
        <div class="custom-button"><p class="fw-semibold">Yield: <span class= "fw-light"><?php echo $recipe['yield']?></span></p></div>
        <div class="custom-button grayBackground d-flex"><p class="fw-semibold white">Share</p><span class= "ps-2"><img class = "share" src="<?php echo site_url(); ?>/dist/images/share.png"></span></div>
        <div class="custom-button redBackground d-flex"><p class="fw-semibold white">Print</p><span class= "ps-2"><img class = "share" src="<?php echo site_url(); ?>/dist/images/printer.png"></span></div>
    </div>
    <div class="custom-border redBackground"></div>
    <div class="row justify-content-sm-center mb-5 px-5">
        <div class="col-sm-12 mb-3 px-5">
            <h3 class ="text-md-start"> Ingrediants</h3>
            <ul class="ps-3">
            <?php echo $recipe['ingredients']?>
            </ul>
        </div>
        <div class="col px-5">
            <h3 class="red text-md-start" >Directions</h3>
            <p class="ps-3">
            <?php echo $recipe['directions']?>
            </p>
        </div>
    </div>
</div>
</div>
<?php include_once __DIR__ . '/_components/footer.php';
?>