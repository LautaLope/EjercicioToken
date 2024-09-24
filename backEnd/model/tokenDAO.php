<?php


function createToken($userName, $password)
{
    if ($userName == "Pablo" && $password == "Admin") {
        $token = base64_encode(json_encode(['userName' => $userName, 'exp' => time() + 30]));
        $signature = hash_hmac('sha256', $token, $password);

        return $token . '.' . $signature;
    }
}