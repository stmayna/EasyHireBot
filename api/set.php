<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

// Library
use Longman\TelegramBot\Entities\Update;

$hook_url     = 'https://easy-hire-bot.vercel.app/api/hook.php';
// $result = $telegram->setWebhook($hook_url, ['certificate' => '/path/to/certificate']);

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($config['api_key'], $config['bot_username']);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}