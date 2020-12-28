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
     * @Route("/nos_bus/nos_bus_mini/{bus_name}", name="bus_mini")
     */
    public function bus_mini($bus_name)
    {
      return $this->render('default/bus_mini.html.twig', [
       'current_page' => 'bus_mini',
        'selected'    => $bus_name
      ]);
    }
    /**
     * @Route("/nos_bus/nos_bus_simples/{bus_name}", name="bus_simple")
     */
    public function bus_simple($bus_name)
    {
      return $this->render('default/bus_simple.html.twig', [
       'current_page' => 'bus_simple',
       'selected'    => $bus_name
      ]);
    }
    /**
     * @Route("/nos_bus/nos_bus_double/{bus_name}", name="bus_double")
     */
    public function bus_double($bus_name)
    {
      return $this->render('default/bus_double.html.twig', [
       'current_page' => 'bus_double',
       'selected'    => $bus_name
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
     * @Route("/qui_sommes_nous", name="qui_sommes_nous")
     */
    public function qui_sommes_nous()
    {
      return $this->render('default/qui_sommes_nous.html.twig', [
       'current_page' => 'qui_sommes_nous',
      ]);
    }
    /**
     * @Route("/qui_sont_ils", name="qui_sont_ils")
     */
    public function qui_sont_ils()
    {
      return $this->render('default/qui_sont_ils.html.twig', [
       'current_page' => 'qui_sont_ils',
      ]);
    }
    /**
     * @Route("/comparer", name="qui_sommes_nous")
     */
    public function comparer()
    {
      return $this->render('default/comparer.html.twig', [
       'current_page' => 'comparer',
      ]);
    }
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation()
    {
      return $this->render('default/reservation.html.twig', [
       'current_page' => 'reservation',
      ]);
    }
    /**
     * @Route("/roadvertising", name="roadvertising")
     */
    public function roadvertising()
    {
      return $this->render('default/roadvertising.html.twig', [
       'current_page' => 'roadvertising',
      ]);
    }
    /**
     * @Route("/parcours", name="parcours")
     */
    public function parcours()
    {
      return $this->render('default/parcours.html.twig', [
       'current_page' => 'parcours',
      ]);
    }
}
