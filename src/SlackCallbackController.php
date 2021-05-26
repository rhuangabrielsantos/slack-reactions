<?php

namespace SlackReactions;

class SlackCallbackController
{
    const FILE_PATH = __DIR__ . '/meuarquivo.json';

    public function handler(?array $data): array
    {
        $dataFile = [];

        if (is_file(self::FILE_PATH)) {
            $dataFile = json_decode(file_get_contents(self::FILE_PATH), true);
        }

        $dataFile[] = $data;

        file_put_contents(self::FILE_PATH, json_encode($dataFile, JSON_PRETTY_PRINT));

        return ['ok'];
    }
}