<?php

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(function($class_name){
    return class_exists($class_name);
});