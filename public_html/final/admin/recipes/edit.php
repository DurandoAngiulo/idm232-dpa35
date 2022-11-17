<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'User does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div class="">
      <div class="px-3">
        <h1 class="">Edit User</h1>
      </div>
          <div class="px-3">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">
              <div class="block input-field-flex-lg">
                <label for="" class="form-label fs-5">Title</label>
                <input class="form-control" type="text" name="title"
                  value="<?php echo $recipe['title']?>">
              </div>
              <div class=" block input-field-flex-sm mt-2">
                <label for=""class="form-label fs-5">Prep-Time</label>
                <input class="form-control" type="text" name="prepTime" value="<?php echo $recipe['prepTime']?>">
              </div>
              <div class=" block input-field-flex-sm mt-2">
                <label for=""class="form-label fs-5">Cook-Time</label>
                <input class="form-control" type="text" name="cookTime" value="<?php echo $recipe['cookTime']?>">
              </div>
              <div class=" block input-field-flex-sm mt-2">
                <label for="" class="form-label fs-5">Yield</label>
                <input class="form-control" type="text" name="yield" value="<?php echo $recipe['yield']?>">
              </div>
              <div class="block input-field-flex-lg mt-2">
                <label for=""class="form-label fs-5">Ingredients</label>
                <textarea class="js-tinymce" type="text" name="ingredients"value=""><?php echo $recipe['ingredients']?></textarea>
              </div>
              <div class=" block input-field-flex-lg mt-2">
                <label for=""class="form-label fs-5">Directions</label>
                <textarea class="js-tinymce" type="text" name="directions" value=""><?php echo $recipe['directions']?></textarea>
              </div>
              <div class=" block input-field-flex-lg my-2">
                <label for=""class="form-label fs-5">Image Url</label>
                <input class="form-control" type="text" name="imageUrl" value="<?php echo $recipe['imageUrl']?>">
              </div>
              <button type="submit" class="btn btn-danger redBackground text-white">Submit</button>
              <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
            </form>
          </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
