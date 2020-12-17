<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PinRepository;

class PinsController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PinRepository $pinRepo): Response
    {
       $pins = $pinRepo -> findAll();
        return $this->render('pins/index.html.twig', compact('pins'));
    }
}
