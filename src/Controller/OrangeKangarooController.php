<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use JMS\Serializer\SerializerInterface ;

class OrangeKangarooController extends AbstractController
{


    private $jms ;

    public function __construct( SerializerInterface $serializer )
    {
            $this->jms = $serializer ;
    }



    /**
     * @Route("/orange/kangaroo", name="orange_kangaroo")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();

        $user = new Post() ;


        $user->setContent("Content");
        $user->setTitle("title");

        $s = $this->jms->serialize($user  , 'json') ;

        $response = new Response($s);
        $response->headers->set('Content-Type', 'application/json');


        return $response ;
    }
}
