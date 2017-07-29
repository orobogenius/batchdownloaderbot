<?php

namespace App\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;


class StartCommand extends Command
{
	/**
     * @var string Command Name
     */
    protected $name = "start";

    /**
     * @var string Command Description
     */
    protected $description = "Start Command to get you started";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
    	$welcomeMsg = <<<HEREDOC
    		*Hello! Welcome to BatchDownloaderBot!*
This bot helps you grabs a batch of files urls by specifying the files pattern using the asterisk (*) symbol. Given a single url that contains the pattern this bot
will fetch the files that matches the characters (digits or alphabets) specified by you. The asterisk (*) acts as a placeholder.

To get started, select *Address* option from the menu:
HEREDOC;
        $keyboard = [
            ['🌐 Address', '💁 Support']
        ];
        $reply_markup = $this->getTelegram()->replyKeyboardMarkup([
          'keyboard' => $keyboard,
          'resize_keyboard' => true,
          'one_time_keyboard' => true
        ]);

    	$this->replyWithMessage([
    		'text' => $welcomeMsg,
            'parse_mode' => 'Markdown',
            'reply_markup' => $reply_markup
		]);
    }
}
