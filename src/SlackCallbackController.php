<?php

namespace SlackReactions;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        $final = [];

        foreach($data as $key => $val)
        {
            $final[] = $key.':'.$val;
        }

        $final = implode(PHP_EOL, $final);

        $arquivo = fopen(__DIR__ . '/meuarquivo.txt', 'w');
        fwrite($arquivo,$final);
        fclose($arquivo);

        return ['ok'];
    }
}