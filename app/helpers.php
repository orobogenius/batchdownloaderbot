<?php

use App\Messages\ProcessMessage as Processor;
use Dotenv\Dotenv;

/**
 * Processes the incoming update
 *
 * @return void
 */
function process_update()
{
    $processor = new Processor();

    $processor->processMessage();
}

/**
 * Gets the telegram api token from env
 *
 * @return string
 */
function get_api_token()
{
    $dotenv = new Dotenv(__DIR__ . '/../');
    $dotenv->load();

    return getenv('TELEGRAM_API_TOKEN');
}
