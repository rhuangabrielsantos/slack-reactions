<?php

namespace SlackReactions;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        $log = new Logger('teste');
        $log->pushHandler(new StreamHandler('meuarquivo.log', Logger::WARNING));

        $log->info('data', $data ?? []);

        return ['ok'];
    }
}