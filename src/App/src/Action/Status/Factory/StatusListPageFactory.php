<?php

namespace App\Action\Status\Factory;

use App\Action\Status\StatusListPageAction;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class StatusListPageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;
        
        $entity_manager = $container->get(EntityManager::class);

        return new StatusListPageAction($template,$entity_manager);
    }
}
