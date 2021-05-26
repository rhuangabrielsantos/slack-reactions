<?php

namespace SlackReactions;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        $arquivo = fopen(__DIR__ . '/meuarquivo.txt', 'w');
        fwrite($arquivo, implode(PHP_EOL, $data ?? []));
        fclose($arquivo);

        return ['ok'];
    }
}