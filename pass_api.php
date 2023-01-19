<?php
function create_password($password) {
    // Generate a salt
    $salt = bin2hex(random_bytes(32));
    // Use sha512 hash algorithm
    $hashed_password = hash("sha512", $salt . $password);
    return $salt . ":" . $hashed_password;
}

$password = readline("Enter a password: ");
$hashed_password = create_password($password);
echo "Hashed password: " . $hashed_password . "\n";
?>

