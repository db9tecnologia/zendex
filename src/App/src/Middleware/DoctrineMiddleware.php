<?php

namespace App\Middleware;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;


class DoctrineMiddleware implements ServerMiddlewareInterface
{

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
       require __DIR__.'/../../../../config/doctrine.php';
       
       return $delegate($request,$delegate);
    }
}
