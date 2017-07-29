<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;
use App\Commands\StartCommand;

$bot = new Api(get_api_token(), true);

$bot->addCommands([
   StartCommand::class
]);

//Handle commands
$commandUpdate = $bot->commandsHandler(true);

//Process the update
process_update();
