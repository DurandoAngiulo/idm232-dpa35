<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Users';
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
        <h1 class="">Recipes</h1>
        <p class="">A list of all the users in your account including their name, title, email
          and role.</p>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="">' . $_GET['error'] . '</p>';
          }

?>
      </div>
      <div class="">
        <button type="button"
          class="">
          <a href="<?php echo site_url() . '/admin/create.php' ?>">
            Add user</a></button>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <?php include __DIR__ . '/../_components/table-recipes.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';
