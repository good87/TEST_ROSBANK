<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Cancel';
    exit;
} else {
    echo "<h2> ROSBANK{$_SERVER['PHP_AUTH_USER']}</h2>";
    $hostname = gethostbyaddr($_SERVER['SERVER_ADDR']);
    echo $hostname;
}
?>
