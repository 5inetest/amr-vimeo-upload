<?php
// use Vimeo\Vimeo;
require(__DIR__ . '/Vimeo.php');

$config = require(__DIR__ . '/init.php');
$lib = new Vimeo($config['client_id'], $config['client_secret']);

// With parameters.
$response = $lib->upload('vid.mp4', [
    "upload" => [
        "approach" => "tus",
        "size" => "800000000"
    ],
    "name" => "My Video",
    'privacy' => [
        'view' => 'anybody'
    ]
]);





if (!empty($config['access_token'])) {
    $lib->setToken($config['access_token']);
    $user = $lib->request('/me');
} else {
    $user = $lib->request('/users/dashron');
}
echo "<br><br>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
print_r($user);
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
