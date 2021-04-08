<?php

namespace App\Controller;

use App\Service\ServiceTest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @var ServiceTest
     */
    private $serviceTest;

    /**
     * TestController constructor.
     */
    public function __construct(ServiceTest $serviceTest)
    {
          $this->serviceTest = $serviceTest;
    }

    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => "TestController{$this->serviceTest->dummyService()}",
        ]);
    }
}
