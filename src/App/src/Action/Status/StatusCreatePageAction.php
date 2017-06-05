<?php

namespace App\Action\Status;

use Doctrine\ORM\EntityManager;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
//use Psr\Http\Message\RequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;
use Zend\Expressive\Router\RouterInterface;
use Zend\Diactoros\Response\RedirectResponse;
use App\Entity as AppStatus;
use App\Form;


class StatusCreatePageAction implements ServerMiddlewareInterface 
{

    private $template;
    
    private $router;

    /**
     * 
     * @var EntityManager
     */
    private $entity_manager;

    public function __construct(Template\TemplateRendererInterface $template = null, RouterInterface $router = null, EntityManager $entity_manager = null) {
        $this->template = $template;
        $this->router = $router;
        $this->entity_manager = $entity_manager;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate) {

        $form = new Form\StatusForm();

        if($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            
            $form->setData($data);
            
            if($form->isValid()) {
                $values = $form->getData();
                
                $status = new AppStatus\Status();
                $status->setArquivo($values['arquivo'])
                        ->setStatus($values['status'])
                        //->setAtualizadoEm($values['atualizado_em'])
                        ->setHash($values['hash']);
                
                $this->entity_manager->persist($status);
                $this->entity_manager->flush();
                
                $uri = $this->router->generateUri('status.list');
                
                return new RedirectResponse($uri);
                
            } else {
                var_dump($form->getMessages());
 
            }
            
        }
        
        return new HtmlResponse($this->template->render('app::status/create', [
                    'form' => $form
        ]));
    }

}
