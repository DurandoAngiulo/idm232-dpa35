<?php
include_once __DIR__ . '/app.php';
$page_title = 'Search';
include_once __DIR__ . '/_components/header.php';
?>
    <div class="cardBackground p-5">
        <h4> Search Recipes...</h4>
    <form action="<?php echo site_url(); ?>/admin/search/searchAdmin.php" method="GET">
        <div class="row w-50">
            <div class="col-sm-7">
          <input class=" form-control" type="text" name="search" id="search" placeholder="Search"
            >
            </div>
            <div class="col-sm">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="">' . $_GET['error'] . '</p>';
          }
?>
    </div>  
         
    <!-- <div class="container-fluid">
        <div class="container p-0  mt-5">
            <div class="row  d-flex justify-content-center">
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div> 
                <div class="col-auto mt-3"><?php include '_components/recipeCard.php'; ?></div>       
            </div>
        </div>
    </div> -->
    <?php include_once __DIR__ . '/_components/footer.php'; ?> 
    
