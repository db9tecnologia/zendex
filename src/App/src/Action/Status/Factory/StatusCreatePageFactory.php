<?php

namespace App\Action\Status\Factory;

use App\Action\Status\StatusCreatePageAction;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Expressive\Router\RouterInterface;

class StatusCreatePageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;
        
        $entity_manager = $container->get(EntityManager::class);
        $router = $container->get(RouterInterface::class);

        return new StatusCreatePageAction($template,$router,$entity_manager);
    }
}
