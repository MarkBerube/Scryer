<?php

namespace AppBundle\Utils;

class PostPath
{
    const DIRECTORYNAME = "posts";
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getPath()
    {
        return $this->container->getParameter('kernel.root_dir')."/../web/".self::DIRECTORYNAME;
    }
}