<?php

$router = new \SimpleRoutes\Router();

$router->post('/slack-callback', \SlackReactions\SlackCallbackController::class, 'handler');

echo $router->handleRequest();