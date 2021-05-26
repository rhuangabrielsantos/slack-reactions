<?php

namespace SlackReactions;

class SlackCallbackController
{
    public function handler(?array $data): array
    {
        var_dump($data);

        return ['ok'];
    }
}