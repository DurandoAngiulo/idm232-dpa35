<?php

include_once __DIR__ . '/../app.php';
$page_title = 'Edit Users';
include_once __DIR__ . '/../_components/header.php';
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
  <div class="">
    <div class="">
      <div class="">
        <h1 class="">Edit User</h1>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">
              <div class="block">
                <label for="">Title</label>
                <input class="border-black border-2" type="text" name="title"
                  value="<?php echo $recipe['title']?>">
              </div>

              <div class="block">
                <label for="">Ingredients</label>
                <input class="border-black border-2" type="text" name="ingredients"
                  value="<?php echo $recipe['ingredients']?>">
              </div>
              <div class=" block">
                <label for="">Directions</label>
                <input class="border-black border-2" type="text" name="directions" value="<?php echo $recipe['directions']?>">
              </div>
              <div class=" block">
                <label for="">Prep-Time</label>
                <input class="border-black border-2" type="text" name="prepTime" value="<?php echo $recipe['prepTime']?>">
              </div>
              <div class=" block">
                <label for="">Cook-Time</label>
                <input class="border-black border-2" type="text" name="cookTime" value="<?php echo $recipe['cookTime']?>">
              </div>
              <div class=" block">
                <label for="">Yield</label>
                <input class="border-black border-2" type="text" name="yield" value="<?php echo $recipe['yield']?>">
              </div>
              <div class=" block">
                <label for="">Image Url</label>
                <input class="border-black border-2" type="text" name="imageUrl" value="<?php echo $recipe['imageUrl']?>">
              </div>
              <input class=" nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4
                  py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
                  focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto" type="submit" value="Submit">

              <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';
