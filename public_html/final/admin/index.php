<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Recipe Index';
include_once __DIR__ . '/../_components/header.php';

?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="">


  <div class="">
    <div class="ps-3 mt-2">
      <div class="">
        <h1 class="">Recipes</h1>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="">' . $_GET['error'] . '</p>';
          }
?>
      </div>
      <div class="my-3">
        <button type="button"
          class="btn btn-light border">
          <a class="grey" href="<?php echo site_url() . '/admin/create.php' ?>">
            Add recipe</a></button>
      </div>
    </div>
    <div class="ps-3">
            <?php include __DIR__ . '/../_components/table-recipes.php'; ?>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';
