<?php
// Routing logic
require_once 'PageController.php';
$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        $controller = new PageController();
        $controller->index();
        break;

    case 'folder1':
        $controller = new PageController();
        $controller->folder1();
        break;

    case 'folder2':
        $controller = new PageController();
        $controller->folder2();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
        break;
}
