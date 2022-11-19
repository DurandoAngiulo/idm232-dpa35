<nav class="navbar navbar-expand-sm bg-light shadow-sm">
  <div class="container-fluid whiteGrayBackground">
    <a class="navbar-brand fw-semibold fst-italic" href="<?php echo site_url(); ?>/index.php"><span class="red">Good</span> Eats</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav container-fluid d-flex">
        <a class="nav-link" href="<?php echo site_url(); ?>/recipe.php">Meals</a>
        <a class="nav-link" href="<?php echo site_url(); ?>/category.php">Explore</a>
        <a class="nav-link" href='<?php echo site_url(); ?>/admin/recipes/index.php'>Admin</a>
       
        <a class="nav-link me-auto" href='#'>News</a>
        
        <a class='nav-link' href="<?php echo site_url(); ?>/search.php"><img src= "<?php echo site_url(); ?>/dist/images/search.svg"></a>
        <a class="nav-link red" href='#'>Log In</a>
        <a class="nav-link" href='#'>Sign Up</a>
      </div>
    </div>
  </div>
</nav>