<?php

include_once __DIR__ . '/../app.php';
$page_title = 'Create Users';
include_once __DIR__ . '/../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="">
  <div class="">
    <div class="">
      <div class="">
        <h1 class="">Create User</h1>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <form action="<?php echo site_url(); ?>/_includes/process-create-recipe.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="border-black border-2 " type="text" name="title">
              </div>

              <div class="block">
                <label for="">Prep Time</label>
                <input class="border-black border-2" type="text" name="prepTime">
              </div>


              <div class="block">
                <label for="">Cook Time</label>
                <input class="border-black border-2" type="text" name="cookTime">
              </div>
              <div class="block">
                <label for="">Yield</label>
                <input class="border-black border-2" type="text" name="yield">
              </div>
              <div class="block">
                <label for="">Ingredients</label>
                <input class="border-black border-2 js-tinymce" type="text" name="ingredients">
              </div>
              <div class="block">
                <label for="">Directions</label>
                <input class="border-black border-2" type="text" name="directions">
              </div>
              <div class="block">
                <label for="">Upload an Image Url</label>
                <input class="border-black border-2" type="text" name="imageUrl">
              </div>
              <input
                class=""
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';