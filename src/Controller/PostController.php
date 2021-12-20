<?php

namespace App\Controller;

use App\Entity\Post;
//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;
use App\Repository\PostRepository;

/**
 * @Route ("/post",name="post.")
 */

class PostController extends AbstractController
{
    /**
     * @Route ("/",name="index")
     * @param PostRepository $postRepository
     * @return Response
     */

    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();

        //dump($posts);
        return $this->render('post/index.html.twig', [
            //'controller_name' => 'PostController',
            'posts' => $posts
        ]);
    }
    /**
     * @Route ("/create",name="create")
     * @param Request $request
     * @return Response
     */
    public function create(ManagerRegistry $doctrine): Response
    {
        //create a new post with title
        $post = new Post();
        $post->setTitle('This is going to be a title');

        //entity manager
        $em = $doctrine->getManager();
        $em->persist($post);
        $em->flush();
        //return a response
        return $this->redirect($this->generateUrl(route: 'post.index'));
    }


    /**
     * @Route ("/show/{id}",name="show")
     * @param Post $post
     * @return Response
     */
    public function show(Post $post)
    {
        //$post = $postRepository->find($id);
        //dump($post);
        //die;
        //create show view
        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }
    /**
     * @Route ("/delete/{id}",name="delete")
     * @param Request $request
     * @return Response
     */
    public function remove(Post $post, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $em->remove($post);
        $em->flush();

        return $this->redirect($this->generateUrl(route: 'post.index'));
    }
}
