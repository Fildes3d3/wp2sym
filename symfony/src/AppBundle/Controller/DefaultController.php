<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /** @var \Ekino\WordpressBundle\Manager\PostManager $postManager */
        $postManager = $this->get('ekino.wordpress.manager.post');

        $criteria = [
            'type' => 'post',
            'status' => 'publish',
        ];
        $posts = $postManager->findBy($criteria);

        return $this->render('default/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
