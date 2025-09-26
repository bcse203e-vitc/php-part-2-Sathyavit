<?php
$emails = [
    "sathya@example.com",
    "wrong-email@",
    "me@site",
    "user123@gmail.com",
    "hello.world@yahoo.in",
    "invalid@.com",
    "test_email@domain.org"
];

$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";

echo "<h3>Valid Email Addresses</h3>";
foreach ($emails as $email) {
    if (preg_match($pattern, $email)) {
        echo $email . "<br>";
    }
}
?>

