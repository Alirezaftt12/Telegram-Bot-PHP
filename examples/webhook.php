<?php
require_once __DIR__ . '/../vendor/autoload.php';
use TelegramBotPHP\Bot;
// Configure Telegram to deliver updates to this HTTPS endpoint.
$bot = new Bot('__BOT_API_TOKEN__');
$update = $bot->getUpdate();
if (isset($update->message) && $update->message->text === '/start') {
    $bot->sendMessage([
        'chat_id' => $update->message->chat->id,
        'text' => 'Hello from Telegram Bot PHP!',
    ]);
}
