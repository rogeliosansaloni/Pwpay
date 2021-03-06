<?php


namespace  pwpay\group19\Model\impl;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use pwpay\group19\Model\Renderer;

final class BasicRenderer implements Renderer{

    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function render(Response $response, string $twig, array $params): Response
    {
        return $this->container->get('view')->render($response,$twig,$params);
    }
}