<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$ingredients_value = $_POST['ingredients'];
$directions_value = $_POST['directions'];
$prep_time_value = $_POST['prepTime'];
$cook_time_value = $_POST['cookTime'];
$yield_value = $_POST['yield'];
$image_url_value = $_POST['imageUrl'];

// Create a SQL statement to insert the data into the database
$query = "INSERT INTO recipes (title, ingredients, directions, prepTime, cookTime, yield, imageUrl) VALUES ('$title_value', '$ingredients_value', '$directions_value', '$prep_time_value', '$cook_time_value', '$yield_value', '$image_url_value')";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the user';
    redirect_to('/admin/index?error=' . $error_message);
}
