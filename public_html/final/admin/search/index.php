<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search Results';
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

<div class="mx-3 mt-3">
  
    
    <div class="">
      
        <h4 class="">Search Results</h4>
       <form action="<?php echo site_url(); ?>/admin/search" method="GET">
        <div class="row w-50">
            <div class="col-sm-7">
          <input class=" form-control" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
            </div>
            <div class="col-sm">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
        <h2 class='mt-2'>You searched for "<?php echo $search; ?>"</h2>
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
    <div class="row px-3">
    <?php
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo "
              <a class='col-auto mt-3' href='recipe.php?id={$recipes_results['id']}'>
              <div class='card cardBackground border-0 shadow' style='width: 16rem;'>
                  <img class='card-img-top' src='{$recipes_results['imageUrl']}'>
                  <div class='card-body p-2'>
                      <p class='card-title grey mb-4 fw-normal card-height'>{$recipes_results['title']}</p>
                      <div class='row d-flex justify-content-between'>
                          <div class='col-7 d-flex'>
                              <img class='timer flex-shrink-0' src='../../dist/images/timer.png'> 
                              <p class='align-self-center red'>{$recipes_results['cookTime']}</p>
                          </div>
                          <div class='col-5 d-flex justify-content-end'>
                              <img class='stars align-self-center' src='../../dist/images/stars.png'>
                          </div>
                      </div> 
                  </div>
              </div>
          </a>   
              
              ";
             }
            }
            ?>
    </div>
</div>
</div>
<?php include_once __DIR__ . '/../../_components/footer.php';