<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'search Results';
include_once __DIR__ . '/../../_components/header.php';
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR directions LIKE '%{$search}%'";
$query .= " OR cookTime LIKE '%{$search}%'";
$query .= " OR prepTime LIKE '%{$search}%'";
$query .= " OR yield LIKE '%{$search}%'";

$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<div class="">
  <div class="">
    
    <div class="">
      <div class="">
        <h4 class="">Search Results</h4>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
  }?>
      </div>
    </div>

    <?php
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h4>' . $recipes_results['title'] . ' ' . $recipes_results['cookTime'] . '</h4>';
              echo '</div>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';