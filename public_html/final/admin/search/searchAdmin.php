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
      
        <h4 class="">Search Results</h4>
        <form action="<?php echo site_url(); ?>/admin/search/searchAdmin.php" method="GET">
        <div class="row w-50">
            <div class="col-sm-7">
          <input class=" form-control" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
            </div>
            <div class="col-sm">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
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
    <div class="table-responsive">
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" class="grey">ID</th>
                  <th scope="col" class="grey">Title</th>
                  <th scope="col" class="grey">Ingredients</th>
                  <th scope="col" class="grey">Directions</th>
                  <th scope="col" class="grey">Prep Time</th>
                  <th scope="col" class="grey">Cook Time</th>
                  <th scope="col" class="grey">Yield</th>
                  <th scope="col"  class="grey">Image Url</th>
                  <th scope="col" class="">
                    <!-- <span class="">Edit</span> -->
                  </th>
                </tr>
              </thead>
              <tbody class="">


    <?php
    $site_url = site_url();
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
            echo "<tr>
           
            <th scope='row' class=''>{$recipes_results['id']}</th>
            <td class=''>{$recipes_results['title']}</td>
            <td class=''>{$recipes_results['ingredients']}</td>
            <td class=''>{$recipes_results['directions']}</td>
            <td class=''>{$recipes_results['prepTime']}</td>
            <td class=''>{$recipes_results['cookTime']}</td>
            <td class=''>{$recipes_results['yield']}</td>
            <td class='text-break'>
            <img  class= 'w-50' src='{$recipes_results['imageUrl']}'>
            </td>
            <td class=''>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipes_results['id']}' class='pe-2'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipes_results['id']}' class=''>Delete</a>
            </td>
          </tr>";
          }
      }
?>
  </tbody>
 </table>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';