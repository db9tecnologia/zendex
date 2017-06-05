<?php

namespace App\Action\Status;

use Doctrine\ORM\EntityManager;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
//use Psr\Http\Message\RequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;
use App\Entity as AppStatus;

class StatusListPageAction implements ServerMiddlewareInterface 
{

    private $template;

    /**
     * 
     * @var EntityManager
     */
    private $entity_manager;

    public function __construct(Template\TemplateRendererInterface $template = null, EntityManager $entity_manager = null) {
        $this->template = $template;
        $this->entity_manager = $entity_manager;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate) {
        
        $repository = $this->entity_manager->getRepository(AppStatus\Status::class);
        $status_list = $repository->findAll();

        return new HtmlResponse($this->template->render('app::status/list', [
                    'list' => $status_list
        ]));
    }

}
