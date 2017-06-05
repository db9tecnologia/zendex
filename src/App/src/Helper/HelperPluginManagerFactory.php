<?php

namespace App\Helper;

use Interop\Container\ContainerInterface;
use Zend\Form\ConfigProvider;
use Zend\View\HelperPluginManager;
use Zend\Stdlib\ArrayUtils;


class HelperPluginManagerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        $viewHelpers = isset($config['view_helpers'])?$config['view_helpers']:[];
        $configFormHelprs = (new ConfigProvider())->getViewHelperConfig();
        
        $viewHelpers = ArrayUtils::merge($configFormHelprs, $viewHelpers);

        return new HelperPluginManager($container,$viewHelpers);
    }
}
