<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request,EntityManagerInterface $manager): Response
    {
        $destinations = $manager->getRepository(Destination::class)->findAll();
        dd($destinations);
        $name = $request->query->get('name');

        return $this->render('home/index.html.twig', [
            'name'=> $name,
            'controller_name' => 'HomeController',
        ]);
    }
}
