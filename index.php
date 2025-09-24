<?php 
// Allowed pages
$allowedPages = ['home'];

// Getting current page
$page = $_GET['page'] ?? 'home';

// Validating page
if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

// Including Page-specific content
// $content = "app/templates/{$page}.html";
// $style = "app/styles/{$page}.css";
// $Javascript = "app/controllers/{$page}.js";
// $backend = "app/backend/{$page}.php";


// Including the base template
include("app/templates/base.php");

?>