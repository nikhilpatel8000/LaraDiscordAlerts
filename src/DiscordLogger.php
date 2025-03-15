<?php

namespace LaraDiscordAlerts;

use Illuminate\Support\Facades\Http;

class DiscordLogger
{
    public static function send($message, $context = [])
    {
        $webhookUrl = config('laradiscordalerts.webhook_url');

        if (!$webhookUrl) {
            return;
        }

        Http::post($webhookUrl, [
            'content' => "**Error Log:**\n$message\n" . json_encode($context, JSON_PRETTY_PRINT)
        ]);
    }
}
