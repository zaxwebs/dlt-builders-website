<?php

// auth.php packs helper functions for authentication

function encryptPassword(string $password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword(string $password, string $encryptedPassword)
{
    return password_verify($password, $encryptedPassword);
}
