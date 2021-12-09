<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/",name="main")
     */
    public function index()
    {
        /*return new Response(content: '<h1> Welcome</h1>');*/
        return $this->render(view: 'home/index.html');
    }
    /**
     * @Route("/custom/{name?}",name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request)
    {
        $name = ($request->get(key: 'name'));
        return new Response(content: '<h2> ' . $name . ' page test</h2>');
    }
}
