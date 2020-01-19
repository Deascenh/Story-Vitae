<?php

// src/Controller/LandingController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LandingController
 * @package App\Controller
 *
 * @Route("/")
 */
class LandingController extends AbstractController
{

    public function __construct()
    {

    }

    /**
     * @Route("/", name="app_landing")
     */
    public function index(Request $request)
    {
        return $this->render('Landing/index.html.twig');
    }
}