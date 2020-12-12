<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aula")
 * Class AulaController
 * @package App\Controller
 */
class AulaController extends AbstractController
{

    /**
     * @Route("/teste/{nome}")
     */
    public function helloSymfony(string $nome)
    {
        return new Response('Bem vindo ao mundo symfony '. $nome);
    }
}