<?php

namespace App\Messages;

class ProcessMessage extends Update
{

  /**
   * Create a new process message instance.
   *
   * @return void
   */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Processes the incoming update
     *
     * @return void
     */
    public function processMessage()
    {
        $text = strtolower($this->getMessageText());

        $class_name = 'App\Messages\\' . ucfirst($text) . 'Message';

        if (class_exists($class_name)) {
          $type = new $class_name($this->update);
          $type->handle();
        }
    }
}
