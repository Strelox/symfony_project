<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController extends AbstractController
{
    /**
     * @return string
     * @Route("/")
     *
     */
    public function index()
    {
        return new Response('OK');
    }

    /**
     * @return string
     * @Route("/health")
     *
     */
    public function health()
    {
        return new Response('Healthcheck ok');
    }
}
