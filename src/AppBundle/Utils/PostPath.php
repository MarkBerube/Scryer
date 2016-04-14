<?php

namespace AppBundle\Utils;

/**
 * Returns the pathing of the Markdown post directory
 */
class PostPath
{
    /**
     * @var string
     */
    const DIRECTORYNAME = "posts";

    /**
     * @var ServiceContainer
     */
    private $container;

    /**
     * @param ServiceContainer $container service container argument set in services config, used to get post path
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * Returns all posts available sorted by modified time
     * @return string
     */
    public function getPath()
    {
        return $this->container->getParameter('kernel.root_dir')."/../web/".self::DIRECTORYNAME;
    }
}