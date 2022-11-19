<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
            <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        
            <div class='card cardBackground border-0 shadow mt-3' style='width: 17rem;'>
                <img class='card-img-top' src='{$recipe['imageUrl']}'>
            <a href='recipe.php'> 
            <div class='card-body p-2>
                
                <h5 class='card-title grey mb-4'>{$recipe['title']}</h5>
                <div class='row d-flex justify-content-between'>
                    <div class='col-7 d-flex'>
                        <img class='timer flex-shrink-0' src='./dist/images/timer.png'> 
                        <p class='align-self-center red'>{$recipe['cookTime']}</p>
                    </div>
                    <div class='col-5 d-flex justify-content-end'>
                        <img class='stars align-self-center' src='./dist/images/stars.png'>
                    </div>
                </div> 
            </div>
            
            </div>
        ";
    }
?>
            <!-- </div>
          </div> -->
            
              