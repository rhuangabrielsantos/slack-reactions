<?php

namespace SlackReactions;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        echo "TESTE" . PHP_EOL;

        print_r($data);

        return ['ok'];
    }
}