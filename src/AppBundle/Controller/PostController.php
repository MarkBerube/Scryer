<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;
use AppBundle\Utils\Markdown;

class PostController extends Controller
{

    public function indexAction(Request $request)
    {

        $markDown = $this->get('markdown');
        $postDirectory = $this->get('postpath')->getPath();

        $sortByDateModified = function (\SplFileInfo $a, \SplFileInfo $b)
        {
            return ($b->getMTime() - $a->getMTime());
        };

        $finder = new Finder();
        $finder->files()->in($postDirectory)->sort($sortByDateModified);

        $entries = [];

        foreach ($finder as $file) {
            $entries[] = ['linkName' => pathinfo($file->getRelativePathname(),PATHINFO_FILENAME),
                            'body' => $markDown->toHtml($file->getContents())];
        }

        return $this->render('posts/index.html.twig',
            [ 'post_entries' => $entries ]
        );
    }

    public function detailAction($page)
    {

        $markDown = $this->get('markdown');
        $postDirectory = $this->get('postpath')->getPath();

        $finder = new Finder();
        $finder->files()->in($postDirectory)->name($page.'.md');
        
        $fileIterator = $finder->getIterator();
        $fileIterator->rewind();

        $file = $fileIterator->current();

        if($file === null) {
            return $this->render('posts/notfound.html.twig',['page' => $page]);
        } else {
            return $this->render('posts/detail.html.twig',
                    [ 'fileText' => $markDown->toHtml($file->getContents())]
            );
        }

    }

}