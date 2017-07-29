<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$server = getenv('SERVER_URL');
$telegram = new Api(get_api_token());

$response = $telegram->setWebhook([
  'url' => $server . $api_token .'/index.php'
]);

print_r(json_decode($response));
