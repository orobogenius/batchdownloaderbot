<?php

namespace App\Messages;

use Telegram\Bot\Api;

class BaseMessage
{
  /**
   * The telegram api bot client
   *
   * @var \Telegram\Bot\Api
   */
    protected $bot;

    /**
     * Create a new base message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bot = new Api(get_api_token(), true);
    }
}
