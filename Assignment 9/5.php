<?php
$logFile = "access.log";

function writeLog($username, $action, $logFile) {
    $timestamp = date("Y-m-d H:i:s");
    $entry = "$username – $timestamp – $action" . PHP_EOL;
    file_put_contents($logFile, $entry, FILE_APPEND);
}


writeLog("admin", "Logged In", $logFile);
writeLog("sathya", "Viewed Dashboard", $logFile);
writeLog("guest", "Logged Out", $logFile);
writeLog("admin", "Updated Settings", $logFile);
writeLog("sathya", "Uploaded File", $logFile);
writeLog("admin", "Deleted Record", $logFile);


if (file_exists($logFile)) {
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $last5 = array_slice($lines, -5);

    echo "<h3>Last 5 Log Entries</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Username</th><th>Date & Time</th><th>Action</th></tr>";

    foreach ($last5 as $line) {
        list($user, $datetime, $time, $action) = explode(" – ", $line);
        echo "<tr>";
        echo "<td>$user</td>";
        echo "<td>$datetime $time</td>";
        echo "<td>$action</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No log file found.";
}
?>

