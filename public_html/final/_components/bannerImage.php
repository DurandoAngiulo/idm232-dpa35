<?php
if (!isset($resultBanner)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
            <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($resultBanner)) {
        echo "

<div class='col-sm-12 col-md-7 mt-5'>
    <a class='' href='recipe.php?id={$recipe['id']}'>
        <img class= 'rounded-1 bannerImage' src='{$recipe['imageUrl']}' alt='recipe'/>
        <div class='d-flex justify-content-center'>
            <div class='popOut rounded'>
                <div class='py-2 px-5'>
                    <h2 class='red text-center' >FEATURED RECIPE</h2>
                    <h3 class='text-center fw-light'>{$recipe['title']}</h3>
                    <p class='fst-italic text-center'>Top rated by Critics</p>
                </div>
            </div>
        </div>
    </a>
</div>

    
    ";
}
?>