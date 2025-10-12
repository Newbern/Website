<?php 
// Allowed pages
$allowedPages = ['home', 'about', 'contact', 'projects', 'resume'];

// Getting current page
$page = $_GET['page'] ?? 'home';

// Validating page
if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

// Including Page-specific content
// Checking Content
$content = "app/templates/{$page}.html";
if (!file_exists($content)) {
    $content = "app/templates/{$page}.php";
}
$style = "app/styles/{$page}.css";
$Javascript = "app/controllers/{$page}.js";
$backend = "app/backend/{$page}.php";
$SEO = "app/SEO/{$page}.html";

// Including the Backend Varables before loading the template
if (file_exists($backend)) {
    include($backend);
}
// Loading the Template
include("app/templates/base.php");

