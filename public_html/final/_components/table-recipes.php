<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
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
    while ($recipe = mysqli_fetch_array($result)) {
        echo "<tr>
           
                <th scope='row' class=''>{$recipe['id']}</th>
                <td class=''>{$recipe['title']}</td>
                <td class=''>{$recipe['ingredients']}</td>
                <td class=''>{$recipe['directions']}</td>
                <td class=''>{$recipe['prepTime']}</td>
                <td class=''>{$recipe['cookTime']}</td>
                <td class=''>{$recipe['yield']}</td>
                <td class='text-break'>{$recipe['imageUrl']}</td>
                <td class=''>
                  <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='pe-2'>Edit</a>
                  <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class=''>Delete</a>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>