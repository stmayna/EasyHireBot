<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

// Load all configuration options
/** @var array $config */
$config = require __DIR__ . '/config.php';

$bot_api_key  = '5961232438:AAExGsqkhQarNtIlvLPExiDJ2XoV6EtjP34';
$bot_username = 'easy_hire_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($config['api_key'], $config['bot_username']);
    $telegram->enableAdmins($config['admins']);
    $telegram->addCommandsPaths($config['commands']['paths']);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}
