<?php

function guidv4() {
    if (function_exists('com_create_guid') === true)
        return trim(com_create_guid(), '{}');
    
    $data = openssl_random_pseudo_bytes(16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function generateKey($email) {
    $key = md5(2418*2+floatval($email));
    $addKey = substr(md5(uniqid(rand(),1)),3,10);
    return $key . $addKey;
}

function sendMailVerification($receiver, $full_name, $activation_code) {
    $subject = "Email Verification Belatour";
    
    $data = [
        'full_name'   => $full_name,
        'base_url' => base_url(),
        'activation_code' => $activation_code
    ];
    
    $message = view('email_verification', $data);
        
    $email = \Config\Services::email();

    $email->setTo($receiver);
    $email->setFrom('noreply@belatour.com', 'noreply');
        
    $email->setSubject($subject);
    $email->setMessage($message);

    if ($email->send()) {
        return 'Email successfully sent. Please check your email!';
    } else {
        return $email->printDebugger(['headers']);
    }
}
