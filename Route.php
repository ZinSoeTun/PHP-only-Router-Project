<?php
// Include the Router class
require_once 'Router.php';
// Create a new Router instance
$router = new Router();
// Define your routes
$router->addRoute('GET', '/', function () {
    require __DIR__ . '/views/home.php';
    exit;
});
$router->addRoute('GET', '/users', function () {
    require __DIR__ . '/views/users.php';
    exit;
});
$router->addRoute('GET', '/contact', function () {
    require __DIR__ . '/views/contact.php';
    exit;
});
$router->addRoute('GET', '/blogs/:blogID', function ($blogID) {
      // Pass the blogID to blog.php
      $blogID = htmlspecialchars($blogID);
    require __DIR__ . '/blog.php';
    exit;
});
// Match the current request to a route
try {
    $router->matchRoute();
} catch (Exception $e) {
    // Handle exceptions if needed
    http_response_code(500);
    echo "An error occurred: " . $e->getMessage();
    exit;
}
?>
