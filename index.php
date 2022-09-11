<?php
include "Telegram.php";
$telegram = new Telegram('5736961835:AAGa0FtSb9ov9nO4-kRmLJ8lOtCZMvtZMxA');
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);