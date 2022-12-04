<?php
if (!isset($resultSidebar)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
            <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($resultSidebar)) {
        echo "
<a class='container mt-4 mb-4' href='recipe.php?id={$recipe['id']}'>
        <div class='row'>
            <div class='col-5 col-lg-3'>
                <img class=' img-fluid rounded-1' src='{$recipe['imageUrl']}' alt='game'/>
            </div>
            <div class='col-7 col-lg-9 pt-1'>
                <p class=' mb-1 fw-semibold'>{$recipe['title']}</p>
                <p class=' mb-0' >{$recipe['cookTime']}</p>
            </div>
        </div>
    </a>
    ";
}
?>