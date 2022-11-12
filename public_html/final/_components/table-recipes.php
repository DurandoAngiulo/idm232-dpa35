<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
            <table class="">
              <thead class="">
                <tr>
                  <th scope="col" class="">ID</th>
                  <th scope="col" class="">Title</th>
                  <th scope="col" class="">Ingredients</th>
                  <th scope="col" class="">Directions</th>
                  <th scope="col" class="">Prep Time</th>
                  <th scope="col" class="">Cook Time</th>
                  <th scope="col" class="">Yield</th>
                  <th scope="col" class="">Image</th>
                  <th scope="col" class="">
                    <span class="">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="">
                <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "<tr>
                <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$recipe['id']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['ingredients']} {$recipe['title']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['directions']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['prepTime']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['cookTime']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['yield']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['imageUrl']}</td>
                <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
                  <a href='{$site_url}/admin/edit.php?id={$recipe['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
                  <a href='{$site_url}/admin/delete.php?id={$recipe['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>