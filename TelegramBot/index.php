<?php
$GET_INPUT = file_get_contents('php://input');

require_once 'config.php';
require_once 'functions.php';

//установка хука
//setHook(1);

$event = json_decode($GET_INPUT, 1);

if (mb_strtolower($event['message']['text']) == 'привет' || $event['message']['text'] == 'здравствуй') {
    $autoAnswer = 'Привет!';
} else {
    $autoAnswer = 'Я не знаю, что значит' . $event['message']['text'] . "?\n Плохо понимаю человеческий язык(";
}

getTelegramApi('sendMessage',
    [
        'text' => $autoAnswer,
        'chat_id' => $event['message']['chat']['id']
    ]
);