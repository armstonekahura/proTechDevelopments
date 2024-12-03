<?php
require '../src/config/db.php';

$page = $_GET['page'] ?? 'home'; // Default to 'home' if no page is specified

// Dynamically load the page
$pagePath = "../src/views/{$page}.view.php";
if (file_exists($pagePath)) {
    include $pagePath;
} else {
    include "../src/views/404.view.php"; // Handle the error if page doesn't exist
}
?>
