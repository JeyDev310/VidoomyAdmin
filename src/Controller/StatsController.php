<?php
/**
 * Created by PhpStorm.
 * User: ando
 * Date: 29/04/2020
 * Time: 19:03
 */

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class StatsController extends EasyAdminController
{

    /**
     * @Route("/admin/stats", name="stats")
     */
    public function index(): Response
    {
        return $this->render('metabase.html.twig');
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->redirectToRoute('stats');
    }
}