<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Create Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="">
    <div class="px-3">
        <h1 class="">Create Recipe</h1>
    </div>
    <div class="">
        <div class="px-3">
            <form action="<?php echo site_url(); ?>/_includes/process-create-recipe.php" method="POST">
              <div class="block input-field-flex-lg">
                <label for="" class="form-label fs-5">Recipe Title</label>
                <input class="form-control" type="text" name="title">
              </div>

              <div class="block input-field-flex-sm mt-2">
                <label for="" class="form-label fs-5">Prep Time</label>
                <input class="form-control" type="text" name="prepTime">
              </div>


              <div class="block input-field-flex-sm mt-2">
                <label for="" class="form-label fs-5">Cook Time</label>
                <input class="form-control" type="text" name="cookTime">
              </div>
              <div class="block input-field-flex-sm mt-2">
                <label for=""class="form-label fs-5">Yield</label>
                <input class="form-control" type="text" name="yield">
              </div>
              <div class="block mt-2 input-field-flex-lg">
                <label for=""class="form-label fs-5">Description</label>
                <textarea class=" js-tinymce" type="text" name="recipeDescription"></textarea>
              </div>
              <div class="block mt-2 input-field-flex-lg">
                <label for=""class="form-label fs-5">Ingredients</label>
                <textarea class=" js-tinymce" type="text" name="ingredients"></textarea>
              </div>
              <div class="block mt-2 input-field-flex-lg">
                <label for="" class="form-label fs-5">Directions</label>
                <textarea class="js-tinymce" type="text" name="directions"></textarea>
              </div>
              <div class="block my-2 input-field-flex-lg">
                <label for="" class="form-label fs-5">Upload an Image Url</label>
                <input class="form-control" type="text" name="imageUrl">
              </div>
              <button type="submit" class="btn btn-danger redBackground text-white">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';