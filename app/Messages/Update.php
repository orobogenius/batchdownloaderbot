<?php

namespace App\Messages;

class Update
{
  /**
   * The update
   *
   * @var stdClass
   */
    protected $update;

    /**
     * Creates an update instance
     *
     * @return void
     */
    public function __construct()
    {
        $response = file_get_contents('php://input');
        $this->update = json_decode($response);
        $this->message = $this->update->message;
    }

    /**
     * Returns the update
     *
     * @return stdClass
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Returns the message object
     *
     * @return stdClass
     */
    public function getMessage()
    {
        return $this->update->message;
    }

    /**
     * Returns the message text
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->message->text;
    }

    /**
     * Returns the chat object
     *
     * @return stdClass
     */
    public function getChat()
    {
        return $this->message->chat;
    }

    /**
     * Returns the username of the user
     *
     * @return string
     */
    public function username()
    {
        return $this->getChat()->username;
    }
}
