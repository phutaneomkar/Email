<?php
// logger.php
if (isset($_GET['data'])) {
    $log = "[" . date("Y-m-d H:i:s") . "] " . $_GET['data'] . "\n";
    file_put_contents("log.txt", $log, FILE_APPEND);
}
?>
