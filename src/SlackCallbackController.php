<?php

namespace SlackReactions;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        if (!is_file(__DIR__.'/my_app.log')) {
            file_put_contents(__DIR__ . '/my_app.log', '');
        }

        $logger = new Logger('teste');
        $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));

        $logger->info('TESTESTE', $data ?? []);

        return ['ok'];
    }
}