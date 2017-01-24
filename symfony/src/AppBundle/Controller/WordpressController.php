<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WordpressController extends Controller
{
    /**
     * @Route("/wordpress", name="wordpress_homepage")
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

        return $this->render('wordpress/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/wordpress/{name}", name="wordpress_post")
     */
    public function showAction(Request $request, $name)
    {
        /** @var \Ekino\WordpressBundle\Manager\PostManager $postManager */
        $postManager = $this->get('ekino.wordpress.manager.post');

        $criteria = [
            'name' => $name,
        ];
        $post = $postManager->findOneBy($criteria);

        return $this->render('wordpress/show.html.twig', [
            'post' => $post,
        ]);
    }
}
