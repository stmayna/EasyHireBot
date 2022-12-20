<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '5961232438:AAExGsqkhQarNtIlvLPExiDJ2XoV6EtjP34';
$bot_username = 'easy_hire_bot';
$hook_url     = 'https://easy-hire-bot.vercel.app/api/hook.php';
// $result = $telegram->setWebhook($hook_url, ['certificate' => '/path/to/certificate']);

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
