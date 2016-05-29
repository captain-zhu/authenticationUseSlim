<?php
/**
 * Created by PhpStorm.
 * User: zhuyongxuan1
 * Date: 16/5/29
 * Time: 下午8:48
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/home', function(Request $request, Response $response) {
    return $this->view->render($response, 'home.twig');
});