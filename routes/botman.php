<?php

use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Ola', function ($bot) {
    $bot->reply('Ola sou o botMan Como Está?');
});

$botman->hears('Como Esta', function ($bot) {
    $bot->reply("Como sou o BotMan (um bot) não possuo estado de espirito, mas e você como esta?");
});

$botman->hears('Estou bem', function ($bot) {
    $bot->reply("Que bom, já que está tudo bem fico feliz pela sua conquista");
});

$botman->hears('Estou mal', function ($bot) {
    $bot->reply("O que posso fazer para te ajudar? Pegue seu telefone e ligue 141 para podermos conversar");
});

$botman->hears('Inicie uma conversa', BotManController::class . '@startConversation');
