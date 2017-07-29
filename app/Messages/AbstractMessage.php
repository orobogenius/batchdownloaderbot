<?php

namespace App\Messages;

interface AbstractMessage
{
  /**
   * Handle an incoming update
   *
   * @return void
   */
    public function handle();

    /**
     * Sends a message response back to the telegram client
     *
     * @return void
     */
    public function sendMessage();
}
