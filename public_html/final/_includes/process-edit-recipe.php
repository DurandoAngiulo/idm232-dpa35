<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = sanitize_value($_POST['title']);
$description_value = sanitize_value($_POST['recipeDescription']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$directions_value = sanitize_value($_POST['directions']);
$prep_time_value = sanitize_value($_POST['prepTime']);
$cook_time_value = sanitize_value($_POST['cookTime']);
$yield_value = sanitize_value($_POST['yield']);
$image_url_value = sanitize_value($_POST['imageUrl']);
$id_value = sanitize_value($_POST['id']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title_value}', recipeDescription = '{$description_value}', ingredients = '{$ingredients_value}', directions = '{$directions_value}', prepTime = '{$prep_time_value}', cookTime = '{$cook_time_value}', yield = '{$yield_value}', imageUrl = '{$image_url_value}' WHERE id = {$id_value}";

// var_dump($query);
// Run the SQL statement
$result = mysqli_query($db_connection, $query);


// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes/index.php');
} 

else {
    $error_message = 'Sorry there was an error creating the user: ' . mysqli_error($db_connection);
    
die;
    redirect_to('/admin/services?error=' . $error_message);
}