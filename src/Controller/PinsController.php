<?php

namespace App\Controller;
use App\Entity\Pin;
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

    /**
     * @Route("/pins/{id<[0-9]+>}", name="show_pin")
     */

     public function show(Pin $pin): Response {
         
        return $this->render ('pins/show.html.twig',compact('pin'));

     }






}
