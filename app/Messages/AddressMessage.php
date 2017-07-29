<?php

namespace App\Messages;

/**
 * @implements AbstractMessage
 */
class AddressMessage extends BaseMessage implements AbstractMessage
{

    /**
     * @var Update
     */
    protected $update;

    /**
     * Create a new address message instance.
     *
     * @param Update
     * @return void
     */
    function __construct($update)
    {
        parent::__construct();
        $this->update = $update;
    }

    public function handle()
    {
        $this->sendMessage();
    }

    public function sendMessage()
    {
        $response = $this->bot->sendMessage([
          'chat_id' => $this->update->message->chat->id,
          'text' => 'Enter the base file url'
        ]);

        $messageId = $response->getMessageId();
    }
}
