<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
         'current_page' => 'index',
        ]);
    }
    /**
     * @Route("/communique", name="communique")
     */
    public function communique()
    {
        return $this->render('default/communique.html.twig', [
         'current_page' => 'communique',
        ]);
    }
    /**
     * @Route("/nouveautes", name="news")
     */
    public function news()
    {
      return $this->render('default/news.html.twig', [
       'current_page' => 'news',
      ]);
    }
    /**
     * @Route("/nos_bus/nos_bus_mini", name="bus_mini")
     */
    public function bus_mini()
    {
      return $this->render('default/bus_mini.html.twig', [
       'current_page' => 'bus_mini',
      ]);
    }
    /**
     * @Route("/nos_bus/nos_bus_simples", name="bus_simple")
     */
    public function bus_simple()
    {
      return $this->render('default/bus_simple.html.twig', [
       'current_page' => 'bus_simple',
      ]);
    }
    /**
     * @Route("/nos_bus/nos_bus_double", name="bus_double")
     */
    public function bus_double()
    {
      return $this->render('default/bus_double.html.twig', [
       'current_page' => 'bus_double',
      ]);
    }
    /**
     * @Route("/tarifs", name="tarifs")
     */
    public function tarifs()
    {
      return $this->render('default/tarifs.html.twig', [
       'current_page' => 'tarifs',
      ]);
    }
    /**
     * @Route("/services", name="services")
     */
    public function services()
    {
      return $this->render('default/services.html.twig', [
       'current_page' => 'services',
      ]);
    }
    /**
     * @Route("/services/inclus", name="services_inclus")
     */
    public function services_inclus()
    {
      return $this->render('default/services_inclus.html.twig', [
       'current_page' => 'services_inclus',
      ]);
    }
    /**
     * @Route("/services/option", name="services_option")
     */
    public function services_option()
    {
      return $this->render('default/services_option.html.twig', [
       'current_page' => 'services_option',
      ]);
    }
    /**
     * @Route("/concurrence", name="concurrence")
     */
    public function concurrence()
    {
      return $this->render('default/concurrence.html.twig', [
       'current_page' => 'concurrence',
      ]);
    }
}
